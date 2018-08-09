/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Minor functions for user interactions 
 */

//mouseover
//Makes the content EXTREME TO THE MAX!
function extreme(item){
    document.getElementById(item).style.color='red';
    document.getElementById(item).style.fontSize="xx-large";
}

//mouseout
//Reverts the content to it's previous, less extreme, demeanor
function unExtreme(item) {
    document.getElementById(item).style.color="white";
    document.getElementById(item).style.fontSize="medium";
}

//onclick
//Used to remove the offending image
function exterminate(item){
    document.getElementById(item).style.display="none";
}

//event of choice onFocusOut
//Used to 'fix' the user's favorite mage on create-account
function fixMage(id){
    document.getElementById(id).value="Khadgar";
}


/*
 * Function to validtate the data entered for use as a new user account.
 * Currently only confirms non-null/empty fields and that passwords match.
 * @returns {Boolean} Success or failure of validation
 */
function validateNewAccount(){
    if (fieldNotNull("firstname") && fieldNotNull("lastname") && fieldNotNull("username") &&
            fieldNotNull("email") && fieldNotNull("password") && fieldNotNull("confpassword")){
        if (passwordMatch("password", "confpassword")){
            return true;
        }
        else {
            alert("Passwords do not match.");
        }
    }
    else {
        alert("Please fill all required fields. \nAll fields are required fields.");
    }
     
    return false;
}

//Function used by validateNewAccount to confirm fields are populated
function fieldNotNull(id){
    var field = document.getElementById(id).value;
    if (field == null || field == ""){
        return false;
    }
    return true;
}

//function used by validateNewAccount to confirm passwords match
function passwordMatch(id1, id2){
    var field1 = document.getElementById(id1).value;
    var field2 = document.getElementById(id2).value;
    
    if (field1 === field2){
        return true;
    }
    
    return false;
}

//Using question ID to facilitate AJAX page update with answer
function answerQuestion(questionID){
    if (questionID.length==0){
        return;
    }
    //creating and setting Http Request
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if (request.readyState==4 && request.status==200){
            //update DOM with answer
            document.getElementById("answer").innerHTML=request.responseText;
        }
    };
    request.open("POST", "answers.php", true);
    request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    request.send("answer=" + questionID);
}
