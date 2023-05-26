
# GUIA BASICO DE USO GIT

Remover credenciais do git do windows (deslogar do git)
Rodar no Cmd ou Powershell (nao funciona no git bash)

## Deve retornar qual usuario está logado no git atualmente
cmdkey /list:LegacyGeneric:target=git:https://github.com

## Deleta as credenciais (faz logout)
cmdkey /delete:LegacyGeneric:target=git:https://github.com