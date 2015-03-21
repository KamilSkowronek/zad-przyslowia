Feature: Web pages

  Scenario: Znaj wroga...
      Given I am on homepage
    When I follow "Znaj wroga..."
    Then I should see "Znaj wroga i samego siebie"