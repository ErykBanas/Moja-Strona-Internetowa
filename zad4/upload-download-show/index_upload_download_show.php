<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8" />
    <meta name="author" content="Eryk Banas" />
    <meta name="description" content="Programowanie internetowe -- Eryk Banas" />
    <meta name="keywords" content="Programowanie internetowe" />
    <title>Upload - Download - Show | Programowanie Internetow Lab | Eryk Banas</title>
    <link rel="icon" type="image/x-icon" href="../../img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="mainStyle.css" />
    <link rel="stylesheet" type="text/css" href="purecss/forms.css" /><!-- purecss.io -->
    <link rel="stylesheet" type="text/css" href="purecss/buttons.css" /><!-- purecss.io -->
    <link rel="stylesheet" type="text/css" href="purecss/tables.css" /><!-- purecss.io -->
</head>
<body>
    <div id="wrapper">
        <header class="textAlignCenter">
            <h1>Programowanie Internetowe</h1>
        </header>
        <section>
            <h2>Upload - Download - Show</h2>
            <article class="border-1px-solid-black padding-1em">
                <section>
                    <div class="text-align-center">
                        <div class="display-inline-block">
                            <!-- !!! enctype="multipart/form-data" !!! -->
                            <form id="form" name="form" class="pure-form pure-form-aligned" action="upload.php" method="post" enctype="multipart/form-data" >
                                <fieldset>
                                    <div class="pure-control-group">
                                        <input type="file" name="fileToUpload_1" />
                                    </div>
                                    <div class="pure-control-group">
                                        <input type="file" name="fileToUpload_2" />
                                    </div>
                                    <div class="pure-control-group">
                                        <input type="file" name="fileToUpload_3" />
                                    </div>
                                    <div class="pure-control-group">
                                        <button type="submit" name="submit" class="pure-button pure-button-primary">Upload</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="text-align-center overflow-auto">
                        <div class="display-inline-block">
                            <?php require_once "show_uploaded.php"; ?> <!--Polecenie "include" zawiera i ocenia okreslony plik. "require" wywala błąd w miejscu, w którym "inlude" zawarłoby tylko warning-a.
                            											   "require_once" z tym, że php tu sprawdza, czy plik już wcześniej był zawarty i jesli tak, to nie zawierac, ani nie wymagac go ponownie!-->
                        </div>
                    </div>
                </section>
            </article>
        </section>
        <footer class="textAlignCenter">
            <p>
                Copyright &copy; Eryk Banas &bull; Strona wykonana wramach zajęć: Programowanie internetowe.
            </p>
            <p>
                <a href="http://validator.w3.org/check?uri=referer" target="_blank">
                    <img src="http://www.w3.org/Icons/w3c_home.png" 
                         alt="Valid HTML 5"  
                         height="31" width="88" />
                </a>
                <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">
                    <img style="border:0;width:88px;height:31px"
                         src="http://jigsaw.w3.org/css-validator/images/vcss"
                         alt="Poprawny CSS!" />
                </a>
            </p>
            <p>
                <a href="javascript:void(0)" 
                   onclick="window.open( 'view-source:' + location.href )" 
                   title="Źródło HTML" >Źródło HTML</a>
                <a href="javascript:void(0)" 
                   onclick="window.open( 'view-source:' + location.href.substring(0, location.href.lastIndexOf('/zad4/')) + '/mainStyle.css' )" 
                   title="Styl głowny" >Źródło CSS</a>
                <a href="javascript:void(0)" 
                   onclick="window.open( 'view-source:' + location.href.substring(0, location.href.lastIndexOf('/zad4/')) + '/purecss/forms.css' )" 
                   title="Styl formularzy (forms)" >Źródło CSS</a>
                <a href="javascript:void(0)" 
                   onclick="window.open( 'view-source:' + location.href.substring(0, location.href.lastIndexOf('/zad4/')) + '/purecss/buttons.css' )"
                   title="Styl przycisków (buttons)">Źródło CSS</a>
                <a href="javascript:void(0)" 
                   onclick="window.open( 'view-source:' + location.href.substring(0, location.href.lastIndexOf('/zad4/')) + '/purecss/tables.css' )"
                   title="Styl tabel (tables)">Źródło CSS</a>
            </p>
        </footer>
    </div>
</body>
</html>