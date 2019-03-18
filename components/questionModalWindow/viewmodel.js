function QuestionModalWindowVM (){
    var self = this;

    test1 = new data;
    self.answers = ko.observableArray([]);
    self.answers(test1.answers);
    self.addAnswer = function() {
        self.answers.push("");
    }
    self.removeAnswer = function(data,event) {
        self.answers.splice(event.target.id,1);
        console.log("removed answers:" + event.target.id);
    }
}