<?php
namespace common\models;

use common\models\User;
use backend\models\Member;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $nama;
    public $nim;
    public $gender;
    public $angkatan;
    public $agama;
    public $alamat;
    public $telepon;
    public $username;
    public $email;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['nama', 'string', 'min' => 3],

            ['nim', 'filter', 'filter' => 'trim'],
            ['nim', 'required'],
            ['nim', 'unique', 'targetClass' => '\backend\models\Member', 'message' => 'This NIM has already been taken.'],
            ['nim', 'string', 'min' => 2, 'max' => 255],

            ['gender', 'string'],

            ['angkatan', 'string'],

            ['agama', 'string'],

            ['alamat', 'string'],

            ['telepon', 'string'],

            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                $member = new Member();
                $member->nama = $this->nama;
                $member->nim = $this->nim;
                $member->gender = $this->gender;
                $member->angkatan = $this->angkatan;
                $member->agama = $this->agama;
                $member->alamat = $this->alamat;
                $member->telepon = $this->telepon;
                $member->id_user = $user->id;
                if($member->save()){
                    return $user;    
                }
            }
        }

        return null;
    }
}
