<?
session_start("user");

if(!(session_is_registered("id_user") AND session_is_registered("apelido_user") AND
session_is_registered("senha_user"))) {
echo "Essa é uma área restrita";
exit;
}
?>