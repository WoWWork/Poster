// NewAccount.spec.js created with Cypress
//
// Start writing your Cypress tests below!
// If you're unfamiliar with how Cypress works,
// check out the link below and learn how to write your first test:
// https://on.cypress.io/writing-first-test
describe("Form test", () => {
  it("Can fill the form", () => {
	cy.visit("http://localhost/forums/views/index.php?content=content.php");
	cy.request("http://localhost/forums/views/index.php?content=content.php");
	cy.window().should('have.property', 'top');
	cy.document().should('have.property', 'charset').and('eq', 'UTF-8');
    cy.get('body > div').should(($div) =>{
	  expect($div).to.have.length(3)
	})
	cy.get('body > div').should(($div) =>{
	  cy.log($div);
	})
	cy.get('.left > p').should('contain', '發   文');
	cy.get('.left > p').should('contain', '登   入');
	cy.get('.left > p:eq(2) > a').click();
	cy.get('.left > p:eq(3) > a').click().end();
	cy.get('#username').type('manager');
	cy.get('#pwd').type('AB9527');
	cy.get('.log_form_submit').click().end();
	cy.get('.left > p:eq(2) > a').click().end();
	//cy.and("have.class", "left");
	//cy.and("have.class", "content");
  });
});