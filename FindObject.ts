function SomethingClicked(event : MouseEvent)
{
    var k = document.getElementById("kitas");
    var path = "", pathPart = "";
    var target = event.target as HTMLElement;
    var previous : HTMLElement;
    while(target != null && target.tagName != "HTML")
    {
        console.log(target.tagName);
        if(previous != null)
        {
            // try find child element by class
            if(previous.hasAttribute("class"))
            {
                var childsByClass = target.getElementsByClassName(previous.className);
                for(var j = 0; j < childsByClass.length; j++)
                {
                    if(previous == childsByClass[j])
                    {
                        pathPart = ".getElementsByClassName('" + previous.className + "')[" + j + "]";
                        path = pathPart + path;
                        console.log(pathPart);
                        break;
                    }
                }
            }
            else
            {
                var childs = target.children; //target.querySelector
                //var childs = target.getElementsByTagName(previous.tagName);
                for(var j = 0; j < childs.length; j++)
                {
                    if(previous == childs[j])
                    {
                        //pathPart = ".getElementsByTagName('" + previous.tagName + "')[" + j + "]";
                        pathPart = ".children[" + j + "]";
                        path = pathPart + path;
                        console.log(pathPart);
                        break;
                    }
                }
            }
        }
        // if element has ID
        if(target.hasAttribute("id"))
        {
            // if document can find this element by id
            if(document.getElementById(target.id) == target)
            {
                pathPart = "document.getElementById('" + target.id + "')";
                path = pathPart + path;
                console.log(pathPart);
                break;
            }
        }
        previous = target;
        target = target.parentElement;
    }
    console.log(path);
}