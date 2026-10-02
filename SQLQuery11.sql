create Table Stud98(
Rollno int,
StudName Varchar(33),
Age int,
Marks int

);

Insert Into Stud98 Values
(1,'Kaushal',23,98),
(2,'Neha',21,95),
(3,'Lekha',24,85),
(4,'Dadu',21,90);

Select *From Stud98

Create view  Stud_view As
 Select Rollno,StudName,Age,Marks
From Stud98;

Select * From Stud_View

Insert Into Stud_View Values
(5,'SaKshi',29,80);

Select * From Stud_View

Update Stud_View
Set Marks=92
where Rollno=4;

Select * From Stud_View


