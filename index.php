<!DOCTYPE html>
<html>
    <head>
        <!-- Requirement meta-tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap css -->
        <link rel="stylesheet" href="сss\bootstrap\bootstrap.css">
        <link href="сss\plugins\wnoty.css" rel="stylesheet">
        <link rel="stylesheet" href="сss\plugins\ekko-lightbox.css">       
    </head>
    <body>
        <!-- Навигационная панель -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <span class="navbar-brand">Project</span>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" aria-pressed="false" autocomplete="off">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">    
                <!-- Селектор тем -->
                <form class="form-inline mx-md-auto" id="themeSelector">
                    <div class="input-group" >
                        <div class="input-group-prepend">
                            <span class="input-group-text">Выбор темы</span>
                        </div>
                        <!-- <select id="themesSelector" class="form-control" data-bind="foreach: allThemesArray">
                            <option data-bind="text: $data"></option>
                        </select> -->
                        <button data-bind="text:activeTheme.name" class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Темы</button>
                        <div class="dropdown-menu" >
                        <!--ko foreach: allThemesArray -->
                            <a class="dropdown-item" href="#" data-bind="text: name, attr:{id:code}, click:$root.select"></a>
                            <div role="separator" class="dropdown-divider"></div>
                        <!-- /ko -->
                            <a class="dropdown-item" href="#" data-toggle="modal" data-bind="click:select">Добавить тему</a>
                        </div>
                        <div class="input-group-append">
                            <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#themeModalWindow" >+</button>
                        </div>
                    </div>
                </form>
                <!-- Форма поиска -->
                <form class="form-inline mr-md-0">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-success" type="submit">Поиск</button>
                        </div>
                        <input class="form-control" type="search" placeholder="" aria-label="Search">
                    </div>
                </form>
            </div>
        </nav>
        <!-- Login modal window -->
        <div class="modal fade" id="loginModalWindow">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h5 class="model-title mx-auto">ВХОД</h5>
                    </div>
                    <form class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="username">Имя пользователя</label>
                            <div class="col-sm-8">
                                <input id="username" data-bind="value:username" type="text" class="form-control">
                            </div>
                        </div>

                        <hr/>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="password">Пароль</label>
                            <div class="col-sm-8">
                                <input id="password" data-bind="value:password" type="password" class="form-control">
                            </div>
                        </div>

                    </form>

                    <form data-bind="submit:submitHandler" class="modal-footer">
                            <button type="submit" class="btn btn-brimary">Войти</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Theme modal window VIEW-->
        <div class="modal" role="dialog" id="themeModalWindow">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <!-- Заголовок модального окна тем -->
                    <div class="modal-header">
                        <h5 class="modal-title">Добавление/редактирование тем</h5>
                        <button class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- Тело модального окна тем -->
                    <form class="modal-body" action="">
                        <!-- Поле с названием темы -->
                        <div class="form-group row">
                            <label for="themeName" class="col-form-label col-sm-3">Название</label>
                            <div class="col-sm-9">
                                <input id="themeName" data-bind="value:name" class="form-control" type="text">
                            </div>
                        </div>
                        <!-- Поле с номером темы -->
                        <div class="form-group row">
                            <label for="themeId" class="col-form-label col-sm-3">Номер</label>
                            <div class="col-sm-9">
                                <input id="themeId" data-bind="value:id" class="form-control" type="text" readonly>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <!-- Подвал модального окна тем -->
                        <button type="button" data-bind="click:remove" class="btn btn-danger pl-1">Удалить</button>
                        <button type="button" data-bind="click:submit" class="btn btn-primary">Сохранить</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of themes modal window -->
        
        <!-- Таблица вопросов -->
        <div id="questionsTable" class="container mt-lg-4 ">
            <div class="row bg-dark text-light">
                <div class="col-2 text-center"><span class="">Название</span></div>
                <div class="col-4 text-center"><span class="">Текст</span></div>
                <div class="col-2 text-center"><span class="">Изображения</span></div>
                <div class="col-2 text-center"><span class="">Видео</span></div>
                <div class="col-2 text-center"><span class="">Ответы</span></div>
            </div>
            <!-- ko foreach:questionsArray -->
            <div class="row border-bottom text-center" data-toggle="modal" data-target="#questionModalWindow">
                <div class="col-2"><span data-bind="text: name" class="">Название</span></div>
                <div class="col-4"><span data-bind="text: text" class="">Текст</span></div>
                <div class="col-2">
                    <a href="https://unsplash.it/1200/768.jpg?image=263" data-bind="attr:{href:img}" data-toggle="lightbox">
                        <img data-bind="attr:{src:img}" src="https://unsplash.it/600.jpg?image=263" class="img-fluid">
                    </a>
                </div>
                <div class="col-2">

                </div>
                <div class="col-2"><span data-bind="text: answers" class="">Ответы</span></div>
            </div>
            <!-- /ko -->
        </div>

        <!-- Модальное окно редактирования вопроса -->        
        <div class="modal fade" id="questionModalWindow" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <!-- Заголовок модального окна -->
                    <div class="modal-header">
                        <h5 class="modal-title">Редактирование вопроса</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <!-- Тело модального окна -->
                    <form class="modal-body"  action="">
                        <!-- Форма ввода названия -->
                        <div class="form-group mx-lg-4">
                            <label class="" for="questionName">Название</label>
                            <div>
                                <input id="questionName" class="form-control" type="text">
                            </div>
                        </div>
                        <!-- Форма ввода текста -->
                        <div class="form-group mx-lg-4">
                            <label for="questionText">Текст</label>
                            <textarea class="form-control" name="" id="questionText" rows="3"></textarea>
                        </div>
                        <!-- Форма ввода правильных ответов -->
                        <div class="form-group mx-lg-4">
                            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar">
                                <label for="">Правильные ответы</label>
                                <div class="btn-group" role="group" aria-label="">
                                    <button type="button" data-bind="click:$root.addAnswer" class="btn btn-outline-secondary">+</button>              
                                </div>                       
                            </div>
                        </div>
                        <div class="form-group mx-lg-4">
                        <!-- ko foreach:answers -->
                            <div class="input-group mt-4">
                                <input class="form-control  " data-bind="value:$data" type="text">
                                <div class="input-group-append">
                                    <button type="button" data-bind="attr:{id:$index},click:$root.removeAnswer" class="btn btn-danger">-</button>     
                                </div>
                            </div>
                        <!-- /ko -->
                        </div>                     
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-primary">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Knockout.js attach -->
        <script src="js/knockout-3.4.2.js"></script>
        <script src="js/knockout-postbox.js"></script>        
        <!-- Jquery.js, popper.js and bootstrap.js attach     -->
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap/bootstrap.js"></script>
        <script src="js/wnoty.js"></script>
        <script src="js/ekko-lightbox.js"></script>        
        <!-- Viewmodel -->
        <script src="components\loginModalWindow\viewmodel.js"></script>
        <script src="components\themeSelector\viewmodel.js"></script>
        <script src="components\themeModalWindow\viewmodel.js"></script>
        <script src="components\questionsTable\viewmodel.js"></script>   
        <script src="components\questionModalWindow\viewmodel.js"></script>           
        <script src="viewmodel.js"></script>
        <script>
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.stopPropagation();
                event.preventDefault();
                $(this).ekkoLightbox();
            });
        </script>
    </body>
</html>