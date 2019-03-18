// Модель вида для селектора тем
function ThemesSelectorVM () {
    var self = this;
    // массив-заполнитель тем
    self.allThemesArray = ko.observableArray 
    ([
        {"name":"Тема 1","code":1},
        {"name":"Тема 2","code":2},
        {"name":"Тема 3","code":3},
        {"name":"Тема 4","code":4}
    ]);
    // AJAX запрос данных из модели
    self.update = function (){
        var gData = new XMLHttpRequest();
        gData.open('post',"/components/themeSelector/model.php",true);
        gData.onload = function update () {
            console.log ("model return:" , gData.responseText);
            self.allThemesArray(JSON.parse(gData.responseText));
        }
        gData.send();
    }
    this.onload = self.update();
    // публикация name и id выбранной темы
    self.activeTheme = { name: ko.observable("Выбор темы").publishOn("activeThemeName"), id:ko.observable("Нет").publishOn("activeThemeId")};
    // Функция выбора темы
    self.select = function(data,event) {
        // Запрет всплытия
        event.stopPropagation();

        self.activeTheme.name (event.target.textContent);
        self.activeTheme.id (event.target.id);
    }
}