let images = document.querySelectorAll('img[src]');
for(let i of images){
    const att = document.createAttribute("loading");
    att.value = "lazy";
    i.setAttributeNode(att);
}