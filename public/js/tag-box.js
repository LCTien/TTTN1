const ul = document.querySelector("#tag-box");
input = ul.querySelector("input");
service = document.getElementById('service');
let tags;
if(service.value == ""){
    tags =[];
}
else
{
    tags = service.value.split(", ");
    createTag();
}

function createTag(){
    ul.querySelectorAll("li").forEach(li => li.remove());
    tags.slice().reverse().forEach(tag => {
        let liTag = ` <li> ${tag} <i class="material-icons" onclick="remove(this,'${tag}')">close</i></li>`;
        ul.insertAdjacentHTML("afterbegin",liTag);
    });
}
function remove(element, tag)
{  
    let index = tags.indexOf(tag);
    tags = [...tags.slice(0,index),...tags.slice(index + 1)];
    element.parentElement.remove();
    if(index == 0)
    {
        if(service.value.split(",").length == 1)
            service.value = service.value.replace(`${tag}`,'');
        else
            service.value = service.value.replace(`${tag}, `,'');
    }
    else
    service.value = service.value.replace(`, ${tag}`,'');

}
function addTag(e)
{
    if(e.key == "Enter")
    {
        let tag = e.target.value.replace(/\s+/g,' ');
        if(tag.length > 1 && !tags.includes(tag)){
            tag.split(',').forEach(tag =>{
                tags.push(tag);
                createTag();
            if(service.value == "")
                service.value += `${tag}`;
            else
                service.value += `, ${tag}`;
            });

        }
        e.target.value= "";
    }
}
input.addEventListener("keyup",addTag);
