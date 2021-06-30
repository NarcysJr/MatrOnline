/*class Validator {

    constructor() {
      this.validations = [
        'minlength',
        'required',
      ]
    }
  
    // inicia a validação de todos os campos
    validate(form) {
  
      // limpa todas as validações antigas
      let currentValidations = document.querySelectorAll('form .error-validation');
  
      if(currentValidations.length) {
        this.cleanValidations(currentValidations);
      }
  
      // pegar todos inputs
      let inputs = form.getElementsByTagName('input');
      // transformar HTMLCollection em array
      let inputsArray = [...inputs];
  
      // loop nos inputs e validação mediante aos atributos encontrados
      inputsArray.forEach(function(input, obj) {
  
        // fazer validação de acordo com o atributo do input
        for(let i = 0; this.validations.length > i; i++) {
          if(input.getAttribute(this.validations[i]) != null) {
  
            // limpa string para saber o método
            let method = this.validations[i].replace("data-", "").replace("-", "");
  
            // valor do input
            let value = input.getAttribute(this.validations[i])
  
            // invoca o método
            this[method](input,value);
  
          }
        }
  
      }, this);
  
    }
  
    // método para validar se tem um mínimo de caracteres
    minlength(input, minValue) {
  
      let inputLength = input.value.length;
  
      let errorMessage = `Este campo precisa ter pelo menos ${minValue} caracteres`;
  
      if(inputLength < minValue) {
        this.printMessage(input, errorMessage);
      }
  
    }
    // método para exibir inputs que são necessários
  required(input) {

    let inputValue = input.value;

    if(inputValue === '') {
      let errorMessage = `Este campo é obrigatório`;

      this.printMessage(input, errorMessage);
    }

  }
  
    // validando o campo de senha
    /*passwordvalidate(input) {
  
      // explodir string em array
      let charArr = input.value.split("");
  
      let uppercases = 0;
      let numbers = 0;
  
      for(let i = 0; charArr.length > i; i++) {
        if(charArr[i] === charArr[i].toUpperCase() && isNaN(parseInt(charArr[i]))) {
          uppercases++;
        } else if(!isNaN(parseInt(charArr[i]))) {
          numbers++;
        }
      }
  
      if(uppercases === 0 || numbers === 0) {
        let errorMessage = `A senha precisa um caractere maiúsculo e um número`;
  
        this.printMessage(input, errorMessage);
      }
  
    }*/
  
    // método para imprimir mensagens de erro
    /*printMessage(input, msg) {
    
      // checa os erros presentes no input
      let errorsQty = input.parentNode.querySelector('.error-validation');
  
      // imprimir erro só se não tiver erros (para não ter um erro em cima de outro erro)
      if(errorsQty === null) {
        let template = document.querySelector('.error-validation').cloneNode(true);
  
        template.textContent = msg;
    
        let inputParent = input.parentNode;
    
        template.classList.remove('template');
    
        inputParent.appendChild(template);
      }
  
    }
  
    // remove todas as validações para fazer a checagem novamente
    cleanValidations(validations) {
      validations.forEach(el => el.remove());
    }
  
}
  
  let form = document.getElementById('formulario');
  let enviar = document.getElementById('enviar');
  
  let validator = new Validator();
  
  // evento de envio do form, que valida os inputs
  enviar.addEventListener('click', function(e) 
  {
    e.preventDefault();
  
    validator.validate(form);
    /*if(validator.validate(form)==0){
        return true;
    }*/
 /* });*/

  var selecao = document.getElementById('provincia').addEventListener('click', municipiosFunc);
        function municipiosFunc() {
            var Provincia = document.getElementById('provincia');
            var municipio = document.getElementById('municipio');
            var aula = document.getElementById('form-aula');
        
        if(Provincia.value != 'Luanda'){
            aula.innerHTML= `
            <strong id="form-aula">
                <label id="onlinelabel" for="online">Online</label>
                <input type="radio" id="online" name="formato" value="Online" checked>
                <label id="presenciallabel" for="presencial">Presencial</label>
                <input type="radio" id="presencial" name="formato" value="presencial" disabled>
                <label id="domiciliolabel" for="domicilio">Domicílio</label>
                <input type="radio" id="domicilio" name="formato" value="Ao domicílio" disabled>
            </strong>`
        }

            if(Provincia.value == 'Bengo') {

                municipio.innerHTML = `

                        <option value="Ambriz">Ambriz</option>
                        <option value="Bula-Atumba">Bula Atumba</option>
                        <option value="Dande">Dande</option>
                        <option value="Dembos">Dembos</option>
                        <option value="Nambuangongo">Nambuangongo</option>
                        <option value="Pango-Aluquém">Pango Aluquém</option>
                        <option value="Caxito">Caxito</option>
`;

            } else if(Provincia.value == 'Benguela') {

                municipio.innerHTML = `

                        <option value="Balombo">Balombo</option>
                        <option value="Baia-Farta">Baía-Farta</option>
                        <option value="Benguela">Benguela</option>
                        <option value="Bocoio">Bocoio</option>
                        <option value="Caimbambo">Caimbambo</option>
                        <option value="Catumbela">Catumbela</option>
                        <option value="Chongorói">Chongorói</option>
                        <option value="Cubal">Cubal</option>
                        <option value="Ganda">Ganda</option>
                        <option value="Lobito">Lobito</option>
`;

            } 
            else if(Provincia.value == 'Cabinda') {

                municipio.innerHTML = `

                        <option value="Belize">Belize</option>
                        <option value="Buco-Zau">Buco-Zau</option>
                        <option value="Cabinda">Cabinda</option>
                        <option value="Cacongo">Cacongo</option>
`;

            }
            else if(Provincia.value == 'Bie') {
                municipio.innerHTML = `

                        <option value="Andulo">Andulo</option>
                        <option value="Camacupa">Camacupa</option>
                        <option value="Catabola">Catabola</option>
                        <option value="Chinguar">Chinguar</option>
                        <option value="Chitembo">Chitembo</option>
                        <option value="Cuemba">Cuemba</option>
                        <option value="Cunhinga">Cunhinga</option>
                        <option value="Cuito">Cuíto</option>
                        <option value="Nharea">Nharea</option>
`;
            }
            else if(Provincia.value == 'Cuando') {
                municipio.innerHTML = `

                        <option value="Calai">Calai</option>
                        <option value="Cuangar">Cuangar</option>
                        <option value="Cuchi">Cuchi</option>
                        <option value="Cuito-Cuanavale">Cuito-Cuanavale</option>
                        <option value="Dirico">Dirico</option>
                        <option value="Mavinga">Mavinga</option>
                        <option value="Menongue">Menongue</option>
                        <option value="Nancova">Nancova</option>
                        <option value="Rivungo">Rivungo</option>
`;
            }
            else if(Provincia.value == 'Cuanzan') {
                municipio.innerHTML = `

                        <option value="Banga">Banga</option>
                        <option value="Bolongongo">Bolongongo</option>
                        <option value="Cambambe">Cambambe</option>
                        <option value="Cazengo">Cazengo</option>
                        <option value="Golungo-alto">Golungo Alto</option>
                        <option value="Gonguembo">Gonguembo</option>
                        <option value="Lucala">Lucala</option>
                        <option value="Ndalatando-ambaca">Ndalatando Ambaca</option>
                        <option value="Quiculungo">Quiculungo</option>
                        <option value="Samba-caju">Samba Caju</option>
`;
            }
            
            else if(Provincia.value == 'Cuanzas') {
                municipio.innerHTML = `

                        <option value="Cassongue">Cassongue</option>
                        <option value="Cela">Cela</option>
                        <option value="Conda">Conda</option>
                        <option value="Ebo">Ebo</option>
                        <option value="Libolo">Libolo</option>
                        <option value="Mussende">Mussende</option>
                        <option value="Porto-amboim">Porto Amboim</option>
                        <option value="Quibala">Quibala</option>
                        <option value="Quilenda">Quilenda</option>
                        <option value="Seles">Seles</option>
                        <option value="Sumbe">Sumbe</option>
`;
            }
            else if(Provincia.value == 'Cunene') {
                municipio.innerHTML = `

                        <option value="Cahama">Cahama</option>
                        <option value="Cuanhama">Cuanhama</option>
                        <option value="Curoca">Curoca</option>
                        <option value="Cuvelai">Cuvelai</option>
                        <option value="Namacunde">Namacunde</option>
                        <option value="Ombadja">Ombadja</option>
                        <option value="Ondijiva">Ondijiva</option>
`;
            }
            else if(Provincia.value == 'Huambo') {
                municipio.innerHTML = `

                        <option value="Bailundo">Bailundo</option>
                        <option value="Cachiungo">Cachiungo</option>
                        <option value="Caála">Caála</option>
                        <option value="Chicala-Choloanga">Chicala-Choloanga</option>
                        <option value="Chinjenje">Chinjenje</option>
                        <option value="Ecunha">Ecunha</option>
                        <option value="Huambo">Huambo</option>
                        <option value="Londuimbali">Londuimbali</option>
                        <option value="Longonjo">Longonjo</option>
                        <option value="Mungo">Mungo</option>
                        <option value="Ucuma">Ucuma</option>
`;
            }
            else if(Provincia.value == 'Huila') {
                municipio.innerHTML = `

                        <option value="Caconda">Caconda</option>
                        <option value="Cacula">Cacula</option>
                        <option value="Caluquembe">Caluquembe</option>
                        <option value="Chiange">Chiange</option>
                        <option value="Chibia">Chibia</option>
                        <option value="Chicomba">Chicomba</option>
                        <option value="Chipindo">Chipindo</option>
                        <option value="Cuvango">Cuvango</option>
                        <option value="Humpata">Humpata</option>
                        <option value="Jamba">Jamba</option>
                        <option value="Lubango">Lubango</option>
                        <option value="Matala">Matala</option>
                        <option value="Quilengues">Quilengues</option>
                        <option value="Quipungo">Quipungo</option>
`;
            }
            else if(Provincia.value == 'Luanda') {

                municipio.innerHTML = `

                        <option value="Belas">Belas</option>
                        <option value="Cacuaco">Cacuaco</option>
                        <option value="Cazenga">Cazenga</option>
                        <option value="Icolo-bengo">Icolo e Bengo</option>
                        <option value="Luanda">Luanda</option>
                        <option value="Quilamba-quiaxi">Quilamba-Quiaxi</option>
                        <option value="Quissama">Quissama</option>
                        <option value="Talatona">Talatona</option>
                        <option value="Viana">Viana</option>
`;
                aula.innerHTML= `
            <strong id="form-aula">
                <label id="onlinelabel" for="online">Online</label>
                <input type="radio" id="online" name="formato" value="Online">
                <label id="presenciallabel" for="presencial">Presencial</label>
                <input type="radio" id="presencial" name="formato" value="Presencial" checked>
                <label id="domiciliolabel" for="domicilio">Domicílio</label>
                <input type="radio" id="domicilio" name="formato" value="Domicílio">
            </strong>`;
            } 
            else if(Provincia.value == 'Lundan') {
                municipio.innerHTML = `
                    <option value="Dundo">Dundo</option>
                    <option value="Cambulo">Cambulo</option>
                    <option value="Capenda-Camulemba">Capenda-Camulemba</option>
                    <option value="Caungula">Caungula</option>
                    <option value="Chitato">Chitato</option>
                    <option value="Cuango">Cuango</option>
                    <option value="Lóvua">Lóvua</option>
                    <option value="Lubalo">Lubalo</option>
                    <option value="Lucapa">Lucapa</option>
                    <option value="Xá-Muteba">Xá-Muteba</option>`;
            }
            else if(Provincia.value == 'Lundas') {
                municipio.innerHTML = `
                    <option value="Cacolo">Cacolo</option>
                    <option value="Dala">Dala</option>
                    <option value="Muconda">Muconda</option>
                    <option value="Saurimo">Saurimo</option>`;
            }
            else if(Provincia.value == 'Malanje') {
                municipio.innerHTML = `
                    <option value="Cacuso">Cacuso</option>
                    <option value="Calandula">Calandula</option>
                    <option value="Cambundi-Catembo">Cambundi-Catembo</option>
                    <option value="Cangandala">Cangandala</option>
                    <option value="Caombo">Caombo</option>
                    <option value="Cuaba-nzoji">Cuaba Nzoji</option>
                    <option value="Cunda-dia-baze">Cunda-Dia-Baze</option>
                    <option value="Luquembo">Luquembo</option>
                    <option value="Malanje">Malanje</option>
                    <option value="Marimba">Marimba</option>
                    <option value="Massango">Massango</option>
                    <option value="Mucari">Mucari</option>
                    <option value="Quela">Quela</option>
                    <option value="Quirima">Quirima</option>`;
            }
            else if(Provincia.value == 'Moxico') {
                municipio.innerHTML = ` 
                    <option value="Alto-Zambeze">Alto Zambeze</option>
                    <option value="Bundas">Bundas</option>
                    <option value="Camanongue">Camanongue</option>
                    <option value="Léua">Léua</option>
                    <option value="Luau">Luau</option>
                    <option value="Luacano">Luacano</option>
                    <option value="Luchazes">Luchazes</option>
                    <option value="Luena">Luena</option>
                    <option value="Cameia">Cameia</option>
                    <option value="Moxico">Moxico</option>`;
            }
            else if(Provincia.value == 'Namibe') {
                municipio.innerHTML = ` 
                    <option value="Bibala">Bibala</option>
                    <option value="Camucuio">Camucuio</option>
                    <option value="Moçâmedes">Moçâmedes</option>
                    <option value="Tômbua">Tômbua</option>
                    <option value="Virei">Virei</option>`;
            }
            else if(Provincia.value == 'Uige') {
                municipio.innerHTML = ` 
                    <option value="Alto-Cauale">Alto Cauale</option>
                    <option value="Ambuíla">Ambuíla</option>
                    <option value="Bembe">Bembe</option>
                    <option value="Buengas">Buengas</option>
                    <option value="Bungo">Bungo</option>
                    <option value="Damba">Damba</option>
                    <option value="Milunga">Milunga</option>
                    <option value="Mucaba">Mucaba</option>
                    <option value="Negage">Negage</option>
                    <option value="Puri">Puri</option>
                    <option value="Quimbele">Quimbele</option>
                    <option value="Quitexe">Quitexe</option>
                    <option value="Sanza-Pombo">Sanza Pombo</option>
                    <option value="Songo">Songo</option>
                    <option value="Uíge">Uíge</option>
                    <option value="Zombo">Zombo</option>`;
            }
            else if(Provincia.value == 'Zaire') {
                municipio.innerHTML = ` 
                    <option value="Cuimba">Cuimba</option>
                    <option value="Mabanza-Congo">Mabanza Congo</option>
                    <option value="Nóqui">Nóqui</option>
                    <option value="Nezeto">Nezeto</option>
                    <option value="Soio">Soio</option>
                    <option value="Tomboco">Tomboco</option>`;
            }
        }