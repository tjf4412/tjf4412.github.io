function makeActive(page, parent){
    var pageList = document.getElementsByTagName("a");
    var parentList = document.getElementsByTagName("button");
    for(var i = 0; i < pageList.length; i++){
        var splitUrl = pageList[i].href.split('/');
        var pageName = splitUrl.pop();
        if (pageName == page){
            pageList[i].classList.add("current");
        }
    }
    if(parent == "none"){
        break;
    } else {
        for(var i = 0; i < parentList.length; i++){
            if (parentList[i].innerHTML == parent){
                parentList[i].classList.add("current");
            }
        }
    }
}
