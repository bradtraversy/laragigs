/// <reference types="cypress" />

describe('Login workflow', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/login')
    })

    it('login page elements', () => {

        // Test the form
        cy.get(`form[action="/users/authenticate"]`).should('exist')

        // Crf token and value.
        cy.get(`input[name="_token"]`).should('be.hidden')
        cy.get(`input[name="_token"]`).invoke('val').then(val => {
            val.length > 8
        })

    })

    it('should successfully login', () => {

        // email = dkuvalis@example.com
        // password = 123
        // name = Hugh Hermann
        // see \database\database.sqlite

        cy.get(`input[name="email"]`).type('dkuvalis@example.com')
        cy.get(`input[name="password"]`).type('123')
        cy.get('button[type="submit"]').click();

        // Elements for logged in users:
        cy.get('nav ul > li:first-child > span').invoke('text').then(text => {
            const trimmedText = text.trim();
            cy.wrap(trimmedText).should('eq', 'Welcome Hugh Hermann');
        })


    })

    it('should show error on unsuccessful login', () => {

        // Wrong credentials:
        // email = dkuvalis@example.com
        // password = 1234
        // name = Hugh Hermann

        cy.get(`input[name="email"]`).type('dkuvalis@example.com')
        cy.get(`input[name="password"]`).type('1234')
        cy.get('button[type="submit"]').click();

        // Show error if credential wrong:
        cy.get('p:contains("Invalid Credentials")').should('exist')


    })



})
