// Модель вида для модального окна тем
function ThemeModalWindowVM () {
    var self = this; 
    // Название активной темы
    self.name = ko.observable().subscribeTo("activeThemeName");
    // ID активной темы
    self.id = ko.observable().subscribeTo("activeThemeId");
    // Функция сохранения
    self.submit = function(){
        console.log("name: ",self.name()," id:",self.id());
        // AJAX запрос к модели
        $.ajax({
            url: 'components/themeModalWindow/model.php',
            method: 'POST',
            data: {name: self.name,code: self.id,action:'save'},
            success: function(){
                $.wnoty({
                    type: 'success',
                    position: 'bottom-left',
                    message: 'Сохранено успешно!'
                });
                ko.dataFor($('#themeSelector')[0]).update();
                console.log("Successfull saved");$('#themeModalWindow').modal('hide');}
        });
    }
    // Функция удаления
    self.remove = function(){
        $.ajax({
            url: 'components/themeModalWindow/model.php',
            method: 'POST',
            data: {name: self.name,code: self.id,action:'remove'},
            success: function(){
                $.wnoty({
                    type: 'success',
                    position: 'bottom-left',
                    message: 'Удалено успешно!'
                });
                ko.dataFor($('#themeSelector')[0]).update();
                console.log("Successfull remove");$('#themeModalWindow').modal('hide');}
        });
    }
}