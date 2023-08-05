// sidebar toggle 
var openSidebar=false;
var sidebar=document.getElementById("sidebar");

// sidebar function to open 
function openSidebar(){

    if(!sidebarOpen){
        sidebar.classList.add("sidebar-responsive");
        sidebarOpen=true;
    }
}
// sidebar function to close
function closeSidebar(){
    if(sidebarOpen){
        sidebar.classList.remove("sidebar-responsive");
        sidebarOpen=false;
    }
}