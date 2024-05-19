function ajouter(){
    file=document.getElementById("ajouter_photo1");
    img=document.getElementById("pdp");
    file.addEventListener('change',function(){
        fichier_choisi=this.files[0];
        if(fichier_choisi){
            reader=new FileReader();
            reader.addEventListener('load',function(){
                img.setAttribute('src',reader.result);
            })
    reader.readAsDataURL(fichier_choisi);
        }
    })
    }