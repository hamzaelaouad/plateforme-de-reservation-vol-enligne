
            function valideforme(){
                let password = document.getElementById("password").value ;
                let mail = document.getElementById("username").value ;
                if(mail == ""){
                    alert(" mail vide") ;

                   return false;
                }
                if(password == ""){
                    alert(" password svide") ;

                   return false;
                }

                
                let res = mail.includes("@") ;
                if (!res){
                    alert("email non valide") ;

                    return false ;
                }
                let pw=document.getElementById("password").value
                let res01=pw.length
                if (res01 < 8) {
                    alert("mot de pass non valide") ;
                    
                    return false;
                }
                
                return true;
            }
            function valideforme1(){
                let nom = document.getElementById("nom").value ;

                if(nom == ""){
                    alert(" nom vide") ;

                   return false;
                }
                let prenom = document.getElementById("prenom").value ;

                if(prenom == ""){
                    alert(" prenom vide") ;

                   return false;
                }
                let password = document.getElementById("password").value ;

                if(password == ""){
                    alert(" password vide") ;

                   return false;
                }
                let mail = document.getElementById("mail").value ;

                if(mail == ""){
                    alert(" mail vide") ;

                   return false;
                }
                let ch = document.getElementById("mail").value ;
                let res = ch.includes("@") ;
                if (!res){
                    alert("email non valide") ;

                    return false ;
                }
                let pw=document.getElementById("password").value
                let res01=pw.length
                if (res01 < 8) {
                    alert("mot de pass non valide") ;
                    
                    return false;
                }
                
                return true;
            }
            
            
           
            
