<?php
/*
Template Name: Contact Form
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>



		<?php endwhile; ?>
	<?php endif; ?>


<script type="text/javascript">
var tx = document.getElementsByTagName('textarea');
for (var i = 0; i < tx.length; i++) {
		tx[i].setAttribute('style', 'height:' + (tx[i].scrollHeight) + 'px;overflow-y:hidden;');
		tx[i].addEventListener("input", OnInput, false);
}

function OnInput() {
		this.style.height = 'auto';
		this.style.height = (this.scrollHeight) + 'px';
}



function validatePrenom() {
		var element_two = document.getElementById("prenom");

		if (document.getElementById('prenom').value == "") {
				element_two.classList.add("erreur_design")
				return false;
		} else {
				document.getElementById('prenom-error').innerHTML = "";
				element_two.classList.remove("erreur_design");
		}
		return true;
}

function validateNom() {
		var element_three = document.getElementById("nom");

		if (document.getElementById('nom').value == "") {
				element_three.classList.add("erreur_design");
				return false;
		} else {
				document.getElementById('nom-error').innerHTML = "";
				element_three.classList.remove("erreur_design");
		}
		return true;
}

function validateEmail(emailField) {
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var element = document.getElementById("email");
		var emailID = document.getElementById('email');

		if (reg.test(emailID.value) == false) {
				element.classList.add("erreur_design");
				return false;
		} else {
				document.getElementById('email-error').innerHTML = "";
				element.classList.remove("erreur_design");
		}
		return true;
}

function validateSujet() {
		var element_threehalf = document.getElementById("sujet");

		if (document.getElementById('sujet').value == "") {
				element_threehalf.classList.add("erreur_design");
				return false;
		} else {
				document.getElementById('sujet-error').innerHTML = "";
				element_threehalf.classList.remove("erreur_design");
		}
		return true;
}

function validateMessage() {
		var element_four = document.getElementById("message");

		if (document.getElementById('message').value == "") {
				element_four.classList.add("erreur_design");
				return false;
		} else {
				document.getElementById('message-error').innerHTML = "";
				element_four.classList.remove("erreur_design");
		}
		return true;
}

function validateForm() {
		var error = false;
		var error_string = 'Please correct the following errors:\n\n';
		var element = document.getElementById("email");
		var element_two = document.getElementById("prenom");
		var element_three = document.getElementById("nom");
		var element_threehalf = document.getElementById("sujet");
		var element_four = document.getElementById("message");
		var element_five = document.getElementById("verif");
		var div = document.getElementById("verif");
		var emailID = document.getElementById('email');
		var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		if (document.getElementById('prenom').value == "") {
				document.getElementById('prenom-error').innerHTML = "message_derreur_prenom_vide";
				element_two.classList.add("erreur_design")
				error = true;
		} else {
				document.getElementById('prenom-error').innerHTML = "";
				element_two.classList.remove("erreur_design");
		}
		if (document.getElementById('nom').value == "") {
				document.getElementById('nom-error').innerHTML = "message_derreur_nom_vide";
				element_three.classList.add("erreur_design");
				error = true;
		} else {
				document.getElementById('nom-error').innerHTML = "";
				element_three.classList.remove("erreur_design");
		}
		if (document.getElementById('message').value == "") {
				document.getElementById('message-error').innerHTML = "message_derreur_message_vide";
				element_four.classList.add("erreur_design");
				error = true;
		} else {
				document.getElementById('message-error').innerHTML = "";
				element_four.classList.remove("erreur_design");
		}

		if (document.getElementById('sujet').value == "") {
				document.getElementById('sujet-error').innerHTML = "sujet_derreur_message_vide";
				element_threehalf.classList.add("erreur_design");
				error = true;
		} else {
				document.getElementById('sujet-error').innerHTML = "";
				element_threehalf.classList.remove("erreur_design");
		}

		if (document.getElementById('email').value == "") {
				document.getElementById('email-error').innerHTML = "message_derreur_email_vide";
				element.classList.add("erreur_design");
				return false;
		} else {
				document.getElementById('email-error').innerHTML = "";
				element.classList.remove("erreur_design");
		}
		if (reg.test(emailID.value) == false) {
				document.getElementById('email-error').innerHTML = "message_derreur_email_faux";
				element.classList.add("erreur_design");
				error = true;
		} else {
				document.getElementById('email-error').innerHTML = "";
				element.classList.remove("erreur_design");
		}
		if (error) {
				return false;
		} else {
				return true;
		}
}
</script>


  <div class="structure_de_page_articlefooter">
      <?php
      get_footer(); ?>
  </div>
