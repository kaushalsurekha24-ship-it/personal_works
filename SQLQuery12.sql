Create Table Stud41(
Rollno int Primary Key,
Stud_name Varchar(33),
Age int
);

Insert Into Stud41(Rollno,Stud_name,Age)
Values
(1,'Kaushal',20),
(2,'Lekka',20),
(3,'Neha',20);

Select *From Stud41
Go

Create Procedure Getstud99
@Rno int
as
Begin
Select *From Stud41
Where Rollno = @Rno;
End;
go

Exec Getstud99 @Rno=2;
Go

Create Procedure Getstud09
@Rno int,
@Sname Varchar(33),
@Ag int
As
Begin
Insert Into Stud41(Rollno,Stud_name,Age)
Values(@Rno,@sname,@Ag);
End;
Go

Exec Getstud09
@Rno=4,
@Sname='Gaurav',
@Ag=20;
Go

Select * From Stud41;
