Feature: Dynamic page
	As a user
	To be able to use the application
	I should see dynamic content according to my input

	@javascript
	Scenario: Page renders
		Given I am on the homepage
		Then I should see "Hello, you!"

	Scenario: Page greets me
		Given I am on the homepage
		And I fill in the name field with "Greg"
		And I press "Submit"
		Then I should see "Hello, Greg!"