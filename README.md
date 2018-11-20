# Semester Project 1
Noroff  FEU1 - Semester Project 1

The Gantt chart is made on Google Sheets. I've used the following formula to conditionally format the cells according to task length: `=AND(E$2<=$D5;E$2>=$C5)`

| Variable       | Effect           |
| ------------- |:-------------:|
| `=AND(E$2<=$D5;E$2>=$C5)`      | Conditionally format the cells according to task length |
| _Date today_     | Conditionally format date if today      |
| `=VLOOKUP(B7;TASKS!A:B;2;FALSE)` | Gets progress percentage from Task sheet      |
| `=arrayformula(if(E$2=$C$5:$C;$A$5:$A;""))` | Get Percentage, display it in chart |


![gantt chart](https://user-images.githubusercontent.com/16366210/48807854-25475100-ed1f-11e8-8249-06d7595f1706.png)

[The live Gantt chart on Google Sheets](https://docs.google.com/spreadsheets/d/1wNVCX1kTldXV7T7FLimykc-VzEX1Av0_sYTL-tekbIk/edit?usp=sharing)