function AppViewModel() {
    
    var self = this;
    self.title_bar = ko.observable('Get all Garage');
    self.json_string = ko.observable(null);

    self.callBackEnd = function (callNumber) {
        $.ajax({
                type: 'GET',
                url: BASEURL + 'index.php/Main/get_gerage_information/' + callNumber
               
        })
        .done(function(data) {
          x =  JSON.stringify(data);
          self.json_string(x);
          if(callNumber == '1'){
              self.title_bar('Get all garage');
          }else if(callNumber=='2'){
              self.title_bar('Get all garage by owner Fitnesstukku');
          }else if(callNumber == '3'){
              self.title_bar('Get all garage by country Finland');
          }else if(callNumber == '4'){
              self.title_bar('Get all garage by cordinates 60.16867390148751 24.930162952045407');
          }
        })
        .fail(function(xhr, status, error) {
            alert(error);
        })
        .always(function(data){                 
        });
    };
    self.callBackEnd(2);
    
    self.InitializeAppViewModel = function (){
         setTimeout(function(){ self.callBackEnd('1'); }, 5000);
         setTimeout(function(){ self.callBackEnd('2'); }, 10000);
         setTimeout(function(){ self.callBackEnd('3'); }, 15000);
         setTimeout(function(){ self.callBackEnd('4'); }, 20000);
         setTimeout(function(){ self.InitializeAppViewModel(); }, 25000);
    }
    self.InitializeAppViewModel();
}          
   

$(document).ready(function () {
    ko.applyBindings(new AppViewModel(), document.getElementById('taskwrapper'));
});

    
    