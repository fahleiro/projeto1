///descreve a realização do teste
describe('Sistema Registro/Login', () => {
  it('passes', () => {
    ///direciona p/ URL de início
    cy.visit('https://projeto1fahleiro.000webhostapp.com/')
    ///realiza o clique p/ tela de registro
    cy.get('.box a').click()
    ///insere uma string aleatória com letras somente (nome / 10 caracteres)
    cy.get('[name=nome]').type(random_string_register_name())      
    function random_string_register_name() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    
        for (var i = 0; i < 10; i++)
          text += possible.charAt(Math.floor(Math.random() * possible.length));
    
        return text;
      }
    ///insere uma string aleatória com letras e números (nome / 10 caracteres)
    cy.get('[name=usuario]').type(random_string_register_user())      
    function random_string_register_user() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    
        for (var i = 0; i < 10; i++)
          text += possible.charAt(Math.floor(Math.random() * possible.length));
    
        return text;
      }
    ///insere uma string aleatória com letras e números (nome / 10 caracteres)
    cy.get('[name=senha]').type(random_string_register_pass())      
    function random_string_register_pass() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    
        for (var i = 0; i < 10; i++)
          text += possible.charAt(Math.floor(Math.random() * possible.length));
    
        return text;
      }
      cy.get('.fields button').click()


  })
})
