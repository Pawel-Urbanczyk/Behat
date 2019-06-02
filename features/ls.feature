Feature: ls
  In order to see the directory
  As a UNIX user
  I need be able to list the current directory's content

  Background:

  Scenario: List 2 files in a directory
    Given there is a file named "john"
    And there is a file named "hammond"
    When I run "ls"
    Then I should see "john" in the output
    And I should see "hammond" in the output

  Scenario: List 1 file and 1 directory
    Given there is a file named "john"
    And there is a dir named "ingen"
    When I run "ls"
    Then I should see "john" in the output
    And I should see "ingen" in the output
