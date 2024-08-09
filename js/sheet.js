let x , z ;
var l ;
document.getElementById("1").innerHTML="hello" ; // famma barcha document object model 
alert("hello world"); //pops a message in window
function namef (p1 , p2){
    return p1*p2 ;
}
typeof ""; 
var person = {name:"john", email:"nn"} ;
//declare a new empty object then add properties
const person = new Object ();
person.email= "mm";
person.name="aa";
//array in js
const letters = [ "aa","bb"] ; 

// the objects are addressed by reference, not by value , they are mutable 
const xp= person;    //xp is not a copy of person they are the same aka they share the same memory address 

delete person.email ; // tha same as delete person["email"] 
text="";
for(let x in person ) {
    text+=person[x] + "" ; 
}
//constructor
function Person (name,email){
    this.email=email ;
    this.name=name;
}
 const person1 = new person("syrine@d.com","syrine") ;

 let str1 = 'Welcome ${var1}, ${var2}!';

 /* Using delete() leaves undefined holes in the array.
    Use pop() or shift() instead. */


/*
function verif_email(email){
    var id_user=$('#id_inscrit_up').val();
    var res=false;
    $.ajax({
      type:"post",
      url: "verif_email.php",
      data:{email:email,id_user:id_user},
  
      success: function(result){
  //traitement apres la vérification
  if(result){
  $(".error_email").addClass("border-danger");
  $("#error_email").show();
  $("#submit").attr("disabled","disabled");
  res=false;
  }else{
    $(".error_email").removeClass("border-danger");
    $(".error_email").addClass("border-success");
    $("#submit").removeAttr("disabled");
    $("#error_email").hide();
    res=true;
  }
  
    }});
   return res;
  }
*/