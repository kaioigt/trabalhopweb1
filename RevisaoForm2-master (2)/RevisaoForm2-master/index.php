<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Delivery</title>
    <link href="css/pedidos.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8" />
</head>
<body >
    <div id="wrap">
        <form method="post" action='pedido/mostrar.php' id="delivery-form" >
        <div>
            <div class="cont_order">
               <fieldset>
                <legend>Monte sua refeição</legend>
                <div class='field_container'>
                <label >Acompanhamento</label>
                <label class='radiolabel'><input type="radio"  value="Arroz"  name="Acompanhamento" />Arroz branco</label><br/>
                <label class='radiolabel'><input type="radio"  value="Macarrao"  name="Acompanhamento" />Macarrão alho-e-óleo</label><br/>
                <label class='radiolabel'><input type="radio"  value="Farofa"  name="Acompanhamento" />Farofa de calabreza</label><br/>
                <label class='radiolabel'><input type="radio"  value="Salada" name="Acompanhamento"  />Salada de folhas</label><br/>
                </div>
                
                <div class='field_container'>
                    <label for="flavor">Prato principal:</label >
                    <select id="flavor" name='prato_principal' >
                    <option value="">Escolha uma opção</option>
                    <option value='Bife_p'>Bife à parmegiana</option>
                    <option value='Frango_P'>Frango à parmegiana</option>
                    <option value='Lasanha_B'>Lasanha de brócolis</option>
                    <option value='Peixe_F'>Peixe frito</option>
                   </select>
                </div>
                <div class='field_container'>
                    <label >Adicionais:</label>
                    <label><input type="checkbox" value="Batata-frita" name="adicional[]" />Batata-frita</label>
                    <label><input type="checkbox" value="Batata-palha" name="adicional[]"/>Batata-palha</label>
                    <label><input type="checkbox" value="Oregano" name="adicional[]"/>Orégano</label>
                    <label><input type="checkbox" value="Vinagrete" name="adicional[]"/>Vinagrete</label>
                    <label><input type="checkbox" value="Tomate" name="adicional[]"/>Tomate</label>
                    <label><input type="checkbox" value="Cebola"name="adicional[]" />Cebola</label>
               </div>
               <div class='field_container'>
                   <label class="inlinelabel"><input type="checkbox" id="agree" name="confirmacao " required /> Confirmo que as opções são verdadeiras e que está de acordo com o meu pedido.</label>
               </div>
              </fieldset>
            </div>
            
        	<div class="cont_details">
            	<fieldset>
                <legend>Informações do cliente</legend>
                <label for='name'>Nome completo</label>
                <input type="text" id="name" name="nome" />
                <br/>
                <label for='address'>Endereço de entrega</label>
                <input type="text" id="address" name="end" />
                <br/>
                <label for='phonenumber'>Telefone</label>
                <input type="text"  id="phonenumber" name="Telefone" />
                <br/>
                </fieldset>
            </div>
            <input type='submit' id='submit' name="enviado" value='Realizar pedido'  />
        </div>  
       </form>
	</div>

</body>
</html>