displayedCandidateNum = 0;

function createNewCandidate(){
    // duplicate candidate layout here
    
    let c_Name = document.getElementById('candidate__name')[displayedCandidateNum].value;
    let c_Insta = document.getElementById('candidate__instagram')[displayedCandidateNum].value;
    let c_LinkedIn = document.getElementById('candidate__linkedin')[displayedCandidateNum].value;
    let c_Canvas = document.getElementById('candidate__canvas')[displayedCandidateNum].value;
    displayedCandidateNum++;
}

document.addEventListener("DOMContentLoaded", () => { 



});