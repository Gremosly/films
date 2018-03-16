

function MouseOver()
{
    var items = this.getElementsByTagName('*');
    for(i=0; i<items.length; i++)
    {
        if(items[i].tagName!="BODY" && items[i].tagName!="HTML" && items[i].className=="poster")
        {
            items[i].style.cursor="pointer";
            items[i].style.boxShadow="0vw 0vw 1vw #bac1d8";
        }


        if(items[i].tagName!="BODY" && items[i].tagName!="HTML")
        {
            items[i].style.color="#bac1d8";
            items[i].style.cursor="pointer";
            items[i].style.textShadow="0.05vw 0.05vw 0.3vw #bac1d8";
           // items[i].style.boxShadow="0vw 0vw 1vw #bac1d8";
        }
    }

}

function MouseOut()
{
    var items = this.getElementsByTagName('*');
    for(i=0; i<items.length; i++)
    {
        if(items[i].tagName!="BODY" && items[i].tagName!="HTML")
        {
            items[i].style.boxShadow="";
            items[i].style.color="";
            items[i].style.textShadow="";
        }
    }
}

             

function start() 
{
    var  elements = document.getElementsByClassName("film_item");

    for(i=0; i<elements.length; i++)
    {
        if(elements[i].tagName!="BODY" && elements[i].tagName!="HTML")
        {
            elements[i].onmouseover = MouseOver;
            elements[i].onmouseout = MouseOut;    
        }
    }
}


window.onload = start;
