<?php
$this->title = 'Sistem Informasi Sarjana Teknik Informatika Institut Teknologi Del';
use backend\models\Announcement;
use backend\models\Tutorial;
use yii\helpers\Html;
/* @var $this yii\web\View */
?>

<div class="site-index">    
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Page layout 4</title>
            <style>
                *{
                        /* Universal reset: */
                    margin:0;
                    padding:0;
                }

                header,footer,
                article,section,
                hgroup,nav,
                figure{
                    /* Giving a display value to the HTML5 rendered elements: */
                    display:block;
                }
                body {
                    font: 150% arial, helvetica, sans-serif;
                    margin: 0;
                }
                h2{
                    margin-top: 0;
                }
                .flex-container {  
                    display: flex;
                    -webkit-justify-flow: relative;
                    font-weight: auto;
                    text-align: left;
                    background-color: rgb(236, 240, 245);
                    padding: 20px;
                    position: center;
                    width: 900px;
                }
                .flex-item {
                    background-color: white; //#afafff;
                    flex-flow: column;
                    width: 60% auto;
                    height: auto;
                    padding:0px;
                    font-family: calibri;
                    display: flex;
                    margin-bottom: 0px;
                }

                .flex-item2 {
                    background-color: #afafff;
                    flex-flow: column;
                    width: 40% auto;
                    height: auto;
                    padding:0px;
                    font-family: calibri;
                    display: flex;
                    margin-bottom: 0px;
                }

                li{
                    margin-left: 35px;
                }
                .goVote{
                    margin-left: 35px;
                }
                h3{
                    margin-left: 15px;
                    margin-right: 20px;
                }
                p{
                    margin-left: 20px;
                    margin-right: 20px;
                }
                .flex-space{
                    height: auto;
                    width: 60px;
                    background-color: #e6e6ff;
                    display: flex;
                }
                .flex-subcontainer{
                    width: auto;
                }
                .border{
                    font-style: bold;
                    color:#e0e0eb;
                }
            </style>
        </head>

        <body>              
                <article>
                    <div class="flex-container">
                        <div class="flex-subcontainer">
                            <div class="flex-item">
                                <h3>Tutorial</h3>
                                <p class="border">_______________________________________________________________</p>
                                <?php
                                        $allTutorial = Tutorial::find()->all();
                                        foreach ($allTutorial as $tutorial) {
                                    ?>
                                    <p>
                                        <strong>
                                        <?= Html::a(Html::encode($tutorial->topik), ['/tutorial/view', 'id'=>$tutorial->id])?>
                                        </strong>
                                    </p>
                                    <?php }?>
                            </div>
                            <div class="flex-item">
                                </div>
                        </div>
                        <div class="flex-space">
                            <p></p>
                        </div>
                        <div class="flex-item">
                            <ul>
                                <h3>Pengumuman</h3>
                                <p class="border">________________________________________________</p>
                                <p class="homeList">
                                    <?php
                                        $allPengumuman = Announcement::find()->orderBy([
                                            'id' => SORT_DESC,])->all();
                                        foreach ($allPengumuman as $pengumuman) {
                                    ?>
                                    <p>
                                        <strong>
                                        <?= Html::a(Html::encode($pengumuman->judul_pengumuman), ['/announcement/view', 'id'=>$pengumuman->id])?>
                                        </strong>
                                    </p>
                                    <?php }?>
                                </p>
                            </ul>

                            
                        </div>
                    </div>
                </article>
        </body>
    </html>
</div>
