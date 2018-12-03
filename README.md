# Semester Project 1
Noroff  FEU1 - Semester Project 1

The Gantt chart is made on Google Sheets. I've used the following formula to conditionally format the cells according to task length: `=AND(E$2<=$D5;E$2>=$C5)`

| Variable       | Effect           |
| ------------- |-------------:|
| `=AND(E$2<=$D5;E$2>=$C5)`      | Conditionally format the cells according to task length |
| _Date today_     | Conditionally format date if today      |
| `=VLOOKUP(B7;TASKS!A:B;2;FALSE)` | Gets progress percentage from Task sheet      |
| `=arrayformula(if(E$2=$C$5:$C;$A$5:$A;""))` | Get Percentage, display it in chart |


![gantt chart](https://user-images.githubusercontent.com/16366210/48807854-25475100-ed1f-11e8-8249-06d7595f1706.png)

[The live Gantt chart on Google Sheets](https://docs.google.com/spreadsheets/d/1wNVCX1kTldXV7T7FLimykc-VzEX1Av0_sYTL-tekbIk/edit?usp=sharing)

colors
pink
  #f9ecf5 hsl(318, 52%, 95%)
  #ecc5e0 hsl(318, 51%, 85%)
  #d378b8 hsl(318, 51%, 65%)
  #c751a3 hsl(318, 51%, 55%)
  #ae388a hsl(318, 51%, 45%)
  #601f4c hsl(318, 51%, 25%)
blue
  #e9f6fc hsl(199, 76%, 95%)
  #bde3f5 hsl(199, 74%, 85%)
  #65bee7 hsl(199, 73%, 65%)
  #39abe0 hsl(199, 73%, 55%)
  #1f91c6 hsl(199, 73%, 45%)
  #11516e hsl(199, 73%, 25%)
yellow
  #fff7e5 hsl(42, 100%, 95%)
  #ffe8b3 hsl(42, 100%, 85%)
  #ffc94d hsl(42, 100%, 65%)
  #ffba1a hsl(42, 100%, 55%)
  #e6a100 hsl(42, 100%, 45%)
  #805900 hsl(42, 100%, 25%)
green
  #f5f7ee hsl(73, 36%, 95%)
  #e1e7cb hsl(73, 37%, 85%)
  #b9c686 hsl(72, 36%, 65%)
  #a5b663 hsl(72, 36%, 55%)
  #8c9c49 hsl(72, 36%, 45%)
  #4e5729 hsl(72, 36%, 25%)
orange
  #fdede7 hsl(16, 85%, 95%)
  #facab7 hsl(17, 87%, 85%)
  #f48457 hsl(17, 88%, 65%)
  #f16027 hsl(17, 88%, 55%)
  #d8470e hsl(17, 88%, 45%)
  #782708 hsl(17, 88%, 25%)
  