
document.getElementById("cipher").checked = true;

function cipher(){
 var text, key, isCipher, length, i, currentLetter, index;
 var result = "";
 var alphabet = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";

 text = document.getElementById("input").value;
 text = text.toUpperCase();
  
 key = Number(document.getElementById("key").value);
 isCipher = document.getElementById("cipher").checked;
  
 length = text.length;
 for(i=0; i<length; i++){
  currentLetter = text.charAt(i);
  index = alphabet.indexOf(currentLetter);
  if(index > -1){
   if(isCipher){
    index = (index + key)%27;
    result += alphabet.charAt(index);
   }else{
    index = (index - key)%27;
    while(index < 0){
     index += 27;
    }
    result += alphabet.charAt(index);
   }
  }else{
     result += currentLetter;
  }
 }
 document.getElementById("output").innerHTML = "El resultado es " + result;
}
