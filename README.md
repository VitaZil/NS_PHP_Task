# PHP Task

## Description 
You have an incomplete program for a tax calculator. The specs of the program are as the following: 
● Display a menu with the following options: 
```sh
  ○ 1- Input your yearly income (salary based) 
  ○ 2- Input the amount of tax exemption (if any) 
  ○ 3- Input your additional income 
  ○ 4- Calculate Tax 
  ○ 5- Quit 
  ```
● The program should allow the user to re-enter values as many times as the user likes (for example if he enters a wrong value). 
● To calculate the tax: 
  ○ First: calculate the total income that is subjected to tax:
```sh
total_income = salary + additional_income - tax_exemption
```
  ○ Second: calculate the tax:
```sh
tax = total_income * 0.20 if the total_income < 30000
tax = total_income * 0.25 if the total_income >= 30000
```
● Whenever the user enters an invalid choice (i.e negative integer or integer greater than 5), the program should inform the user that the input is unacceptable and should allow the user to try again (and again!) 
● The menu above should be displayed after each operation until the user quits 

## Deliverables 
● To simplify the task, you are provided with the needed classes (InputHandler, OutputHandler, TaxCalculator, and MainClass).


