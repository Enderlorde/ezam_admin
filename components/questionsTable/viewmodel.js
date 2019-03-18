function QuestionsTableVM() {
    var self = this;
    self.questionsArray = ko.observableArray([
        {name:"Вопрос 1",text:"Lorem ipsum dolor",img:"http://via.placeholder.com/63.png",video:"",answers:["Ответ 1","Ответ 2"]},
        {name:"Вопрос 2",text:"Lorem ipsum dolor",img:"http://via.placeholder.com/63.png",video:"",answers:["Ответ 1","Ответ 2"]},
    ]).publishOn("questionsArray");

    function data() {
        this.name = "имя";
        this.text= "текст";
        this.img= 
            [
                "http://via.placeholder.com/500px.png","http://via.placeholder.com/200px.png"
            ],
            this.video= ["none"];
            this.answers= 
        [
            "ответ1","ответ2"
        ];
    };

    var gData = new XMLHttpRequest();
    gData.open("POST","components/questionsTable/model.php",true);
    gData.onload = function() {
        console.log(gData.responseText);
        self.questionsArray(JSON.parse(gData.responseText));
        ko.utils.foreach
    }
    gData.send();

}