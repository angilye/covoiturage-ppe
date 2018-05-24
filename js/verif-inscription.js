function verifNom(champ)
		{
		   if(champ.value.length < 3 || champ.value.length > 20)
		   {   
		       if($('#nom').attr('class')=="form-group has-success has-feedback"||$('#nom').attr('class')=="form-group")
		       {
		    	$('#nom').append('<span class="glyphicon glyphicon-warning-sign form-control-feedback nomTexteErreur"></span><span class="help-block nomTexteErreur">Valeur incorrecte</span>');
		    	$('span').remove('.nomTexteValide');
		    	$( "#nom" ).removeClass("form-group has-success has-feedback");
		    	$( "#nom" ).addClass( "form-group has-error has-feedback" );
		    	return false;
		       }
		   }
		   else 
		   {
		       if($('#nom').attr('class')=="form-group has-error has-feedback"||$('#nom').attr('class')=="form-group")
		       {
		        $('#nom').append('<span class="glyphicon glyphicon-ok form-control-feedback nomTexteValide"></span>');
		    	$('span').remove('.nomTexteErreur');
				$( "#nom" ).removeClass("form-group has-error has-feedback");
		    	$( "#nom" ).addClass( "form-group has-success has-feedback" );
		    	return true;
		       }
			}
		}

function verifPseudo(champ)
		{
		   if(champ.value.length < 3 || champ.value.length > 15)
		   {   
		       if($('#pseudo').attr('class')=="form-group has-success has-feedback"||$('#pseudo').attr('class')=="form-group")
		       {
		    	$('#pseudo').append('<span class="glyphicon glyphicon-warning-sign form-control-feedback pseudoTexteErreur"></span><span class="help-block pseudoTexteErreur">longueure entre 3 et 15 caractere</span>');
		    	$('span').remove('.pseudoTexteValide');
		    	$( "#pseudo" ).removeClass("form-group has-success has-feedback");
		    	$( "#pseudo" ).addClass( "form-group has-error has-feedback" );
		    	return false;
		       }
		   }
		   else 
		   {
		       if($('#pseudo').attr('class')=="form-group has-error has-feedback"||$('#pseudo').attr('class')=="form-group")
		       {
		        $('#pseudo').append('<span class="glyphicon glyphicon-ok form-control-feedback pseudoTexteValide"></span>');
		    	$('span').remove('.pseudoTexteErreur');
				$( "#pseudo" ).removeClass("form-group has-error has-feedback");
		    	$( "#pseudo" ).addClass( "form-group has-success has-feedback" );
		    	return true;
		       }
			}
		}
		
function verifEmail(champ)
		{
		   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
		   if(!regex.test(champ.value)||champ.value.length < 3 || champ.value.length > 50)
		   {   
		   	   if($('#email').attr('class')=="form-group has-success has-feedback"||$('#email').attr('class')=="form-group")
		       {
					$('#email').append('<span class="glyphicon glyphicon-warning-sign form-control-feedback emailTexteErreur"></span><span class="help-block emailTexteErreur">adresse email non valide</span>');
					$('span').remove('.emailTexteValide');
					$( "#email" ).removeClass("form-group has-success has-feedback");
					$( "#email" ).addClass( "form-group has-error has-feedback" );
					return false;
		       }
		    }
			else 
			{
				if($('#email').attr('class')=="form-group has-error has-feedback"||$('#email').attr('class')=="form-group")
				{
					$('#email').append('<span class="glyphicon glyphicon-ok form-control-feedback emailTexteValide"></span>');
					$('span').remove('.emailTexteErreur');
					$( "#email" ).removeClass("form-group has-error has-feedback");
					$( "#email" ).addClass( "form-group has-success has-feedback" );
					return true;
				}
			}
		}
		
function verifAge(champ)
		{
		   var age = parseInt(champ.value);
		   if(isNaN(age) || age < 18 || age > 100)
		   {	
		   		if($('#age').attr('class')=="form-group has-success has-feedback"||$('#age').attr('class')=="form-group")
		        {
			    	$('#age').append('<span class="glyphicon glyphicon-warning-sign form-control-feedback ageTexteErreur"></span><span class="help-block ageTexteErreur">Vous devez etre majeur.</span>');
			    	$('span').remove('.ageTexteValide');
			    	$( "#age" ).removeClass("form-group has-success has-feedback");
			    	$( "#age" ).addClass( "form-group has-error has-feedback" );
			    	return false;
		        }
		   }
		   else 
		   {
		   		if($('#age').attr('class')=="form-group has-error has-feedback"||$('#age').attr('class')=="form-group")
				{
			        $('#age').append('<span class="glyphicon glyphicon-ok form-control-feedback ageTexteValide"></span>');
			    	$('span').remove('.ageTexteErreur');
					$( "#age" ).removeClass("form-group has-error has-feedback");
			    	$( "#age" ).addClass( "form-group has-success has-feedback" );
			    	return true;
				}
			}
		}
		
function verifMDP(champ)
		{
		   var regex = '^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,}$';
		   if(!regex.test(champ.value))
		   {   
		   		if($('#mdp').attr('class')=="form-group has-success has-feedback"||$('#mdp').attr('class')=="form-group")
		        {
			    	$('#mdp').append('<span class="glyphicon glyphicon-warning-sign form-control-feedback mdpTexteErreur"></span><span class="help-block mdpTexteErreur">Doit contenir 6 caractere dont minimum 1 Maj et 1 chiffre</span>');
			    	$('span').remove('.mdpTexteValide');
			    	$( "#mdp" ).removeClass("form-group has-success has-feedback");
			    	$( "#mdp" ).addClass( "form-group has-error has-feedback" );
			    	return false;
				}
		   }
		   else 
		   {
		   		if($('#mdp').attr('class')=="form-group has-error has-feedback"||$('#mdp').attr('class')=="form-group")
				{
			        $('#mdp').append('<span class="glyphicon glyphicon-ok form-control-feedback mdpTexteValide"></span>');
			    	$('span').remove('.mdpTexteErreur');
					$( "#mdp" ).removeClass("form-group has-error has-feedback");
			    	$( "#mdp" ).addClass( "form-group has-success has-feedback" );
			    	return true;
				}
			}
		}
		
function verifReMDP(champ)
		{
		   var mdp = $('#testMdp').val();
		   var reMdp = $('#reTestMdp').val();
		   if(!mdp == "")
			{
			   if(mdp == reMdp)
			   {   
			   		if($('#re_mdp').attr('class')=="form-group has-error has-feedback"||$('#re_mdp').attr('class')=="form-group")
					{
						$('#re_mdp').append('<span class="glyphicon glyphicon-ok form-control-feedback re_mdpTexteValide"></span>');
				    	$('span').remove('.re_mdpTexteErreur');
						$( "#re_mdp" ).removeClass("form-group has-error has-feedback");
				    	$( "#re_mdp" ).addClass( "form-group has-success has-feedback" );
				    	return true;
			        }
			   }
			   else 
			   {
			   		if($('#re_mdp').attr('class')=="form-group has-success has-feedback"||$('#re_mdp').attr('class')=="form-group")
			        {	
						$('#re_mdp').append('<span class="glyphicon glyphicon-warning-sign form-control-feedback re_mdpTexteErreur"></span><span class="help-block re_mdpTexteErreur">Mot de Passe différent</span>');
				    	$('span').remove('.re_mdpTexteValide');
				    	$( "#re_mdp" ).removeClass("form-group has-success has-feedback");
				    	$( "#re_mdp" ).addClass( "form-group has-error has-feedback" );
				    	return false;
			        }
				}
			}
		}

function modifMdp(champ)
	{	
			if($('#re_mdp').attr('class')=="form-group has-success has-feedback"||$('#re_mdp').attr('class')=="form-group has-error has-feedback")
		        {	
		        	verifReMDP(this)
		        }
	}
		


function verifForm(f)
		{
		   var nomOK = verifNom(f.nom);
		   var pseudoOk = verifPseudo(f.pseudo);
		   var mailOk = verifEmail(f.email);
		   var ageOk = verifAge(f.age);
		   var mdpOK = verifMDP(f.mdp);
		   var re_mdpOK = verifReMDP(f.re_mdp);
			
		   if(nomOK && pseudoOk && mailOk && ageOk && mdpOK && re_mdpOK)
		    {
		      
		      return true;
			}
		   else
		   {
		      alert("Veuillez remplir correctement tous les champs");
		      return false;
		   }
		}
		

		   
		
		
		
		