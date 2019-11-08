/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function doMenuDropdownAction(idString) {

    var divBody = document.getElementById(idString + 'Body');
    var arrow = document.getElementById(idString + 'Arrow');
	 

    if (divBody.style.display === "none") {
        divBody.style.display = "block";
		
        arrow.classList.remove("fa-angle-down");
        arrow.classList.add("fa-angle-up");
    } else {
        divBody.style.display = "none";
        arrow.classList.remove("fa-angle-up");
        arrow.classList.add("fa-angle-down");
		
    }
}
