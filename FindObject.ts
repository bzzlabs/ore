class PathPart {
    itemId : string;
    itemClass : string;
    itemTag : string;
    // item index in parent container childs collection
    itemIndex : number;
    // item index in parent container childs collection with same tagName
    itemTagIndex : number;
    // item index in parent container childs collection with same className
    itemClassIndex : number;
    // child item
    child : PathPart;
    
    constructor(element : HTMLElement, subPath : PathPart) {
        this.child = subPath;

        this.itemTag = element.tagName;
        if(element.hasAttribute("class"))
            this.itemClass = element.className;
        if(element.hasAttribute("id") && element.ownerDocument.getElementById(element.id) == element)
            this.itemId = element.id;
        if(element.parentElement != null)
        {
            if(this.itemClass != null)
            {
                let byClass = element.parentElement.getElementsByClassName(this.itemClass);
                for(let i = 0; i < byClass.length; i++)
                {
                    if(byClass[i] == element)
                    {
                        this.itemClassIndex = i;
                        break;
                    }
                }
            }

            let pch = element.parentElement.children;
            for(let i = 0, j = 0; i < pch.length; i++)
            {
                if(pch[i].tagName == element.tagName)
                {
                    if(pch[i] == element)
                    {
                        this.itemIndex = i; 
                        this.itemTagIndex = j;
                        break;
                    }
                    j++;
                }
                
            }
        }
    }

    getPath()
    {
        let path = this.child != null ? this.child.getPath() : "";
        if(this.itemId != null)
            return ".getElementById('" + this.itemId + "')" + path;
        if(this.itemClass != null)
            return ".getElementsByClassName('" + this.itemClass + "')[" + this.itemClassIndex + "]" + path;
        return ".children[" + this.itemIndex + "]" + path;
    }
}

function SomethingClicked(event : MouseEvent)
{
    var k = document.getElementById("kitas");
    var target = event.target as HTMLElement;
    var tree = null as PathPart;
    while(target != null && target.tagName != "BODY")
    {
        tree = new PathPart(target, tree);
        if(tree.itemId != null)
            break;
        target = target.parentElement;
    }

    if(tree != null)
    {
        let path = tree.itemId != null ? 
            "document" + tree.getPath() : 
            "document.body" + tree.getPath();
        console.log(path);
        var check = eval(path) as HTMLElement;
        if(event.target == check)
        {
            check.style.border = "solid 1px red";
            console.log(check.innerText);
        }
    }
    
}

