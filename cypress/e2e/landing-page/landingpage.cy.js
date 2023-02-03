/// <reference types="cypress" />

describe('landing page', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/')
    })

    it('displays landing page elements and basic navigation for non logged in user', () => {

        // The search form input
        cy.get(`input[name="search"]`).should('have.attr', 'placeholder')
            .and('eq', 'Search Laravel Gigs...')

        // Pagination (generated enough items).
        cy.get(`nav[role="navigation"]`).should('have.attr', 'aria-label')
            .and('eq', 'Pagination Navigation')

        // To to page 3 on pagination
        // Get third item (index) from list.
        cy.get(`[aria-label="Pagination Navigation"] a`).eq(2)
            .click()
        cy.url().should('include', '?page=3')

        // Footer items, on 'Post Job' btn, user should go to login, if not logged in.
        cy.contains('Post Job').click()
        cy.url().should('include', '/login')

    })

})
