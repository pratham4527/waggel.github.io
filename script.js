// slider for home page

function first() {
        document.getElementById("sl1").src="l5cut.jpg"
     }
function second() {
        document.getElementById("sl1").src="l6cut.jpg"
     }
function third() {
        document.getElementById("sl1").src="l7cut.jpg"
     }
function fourth() {
        document.getElementById("sl1").src="l8cut.jpg"
     }
function fifth() {
        document.getElementById("sl1").src="l9cut.jpg"
     }

     setInterval(first,4000);
     setInterval(second,8000);
     setInterval(third,12000);
     setInterval(fourth,15000);
     setInterval(fifth,20000);

// ======================================================================================     

let len1=document.getElementById("navbar").style.right;

function barfun1(){
                document.getElementById("navbar").style.right="0px";
}

function barfun2(){
                document.getElementById("navbar").style.right="-314px";
}

// ====================================================================================== 

function exploremore(){
        window.location.href='http://localhost/internship/electronicsdisplayprod.php'                
}



// ====================================================================================== 

// slider for home page - mobile

function mob_second() {
        document.getElementById("mob-sl1").src="img/banner/m2.png"
     }
function mob_third() {
        document.getElementById("mob-sl1").src="img/banner/ha3.jpg"
     }
function mob_forth() {
        document.getElementById("mob-sl1").src="img/banner/b4bt4.png"
     }
function mob_fifth() {
        document.getElementById("mob-sl1").src="img/banner/m3.jpeg"
     }


     setInterval(mob_second,4000);
     setInterval(mob_third,8000);
     setInterval(mob_forth,12000);
     setInterval(mob_fifth,16000);


// =================================================================================================

