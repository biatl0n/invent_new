Attribute VB_Name = "Module11"
Sub Mak_1()

For i = 1 To 300
    Set Result = Cells.Find(What:="��� Samsung SCX 4623", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "��� Samsung SCX 4623"
        findstr = "��� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "���"
    End If

    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������� HP 630", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������� HP 630"
        findstr = "������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="���������� ����� cisco ASA 5505", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "���������� ����� cisco ASA 5505"
        findstr = "���������� ����� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "���������� �����"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="��������� ���� HP 4000", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "��������� ���� HP 4000"
        findstr = "��������� ���� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "��������� ����"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="3G ������ ������", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "3G ������ ������"
        findstr = "3G ������ "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "3G ������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="3G ������ �������", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "3G ������ �������"
        findstr = "3G ������ "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "3G ������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������������� cisco 2800", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������������� cisco 2800"
        findstr = "������������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������������� cisco 2801", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������������� cisco 2801"
        findstr = "������������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������������� cisco 2901", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������������� cisco 2901"
        findstr = "������������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="���������� Cisco 2960", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "���������� Cisco 2960"
        findstr = "���������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "����������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="���������� Cisco 2960", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "���������� Cisco 2960"
        findstr = "���������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "����������"
    End If

    '_________________________________________________________
    
    Set Result = Cells.Find(What:="cisco 891", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "cisco 891"
        findstr = "cisco 891"
        newstr = "cisco 891"
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="UPS APC 1000XL", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "UPS APC 1000XL"
        findstr = "UPS "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "���"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="��� SUA1500", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "��� SUA1500"
        findstr = "��� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "���"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="��� Ricoh MP201", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "��� Ricoh MP201"
        findstr = "��� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "���"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="��� Xerox M20i", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "��� Xerox M20i"
        findstr = "��� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "���"
    End If

    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������� HP LE1711", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������� HP LE1711"
        findstr = "������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������� Samsung E 1720", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������� Samsung E 1720"
        findstr = "������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="��������� ���� HP 6200", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "��������� ���� HP 6200"
        findstr = "��������� ���� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "��������� ����"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="��������� ���� HP 6300", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "��������� ���� HP 6300"
        findstr = "��������� ���� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "��������� ����"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Web ������ Logitech", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Web ������ Logitech"
        findstr = "Web ������ "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Web ������"
    End If

    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������� HP L1706", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������� HP L1706"
        findstr = "������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������� HP L1710", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������� HP L1710"
        findstr = "������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������� HP L1702", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������� HP L1702"
        findstr = "������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="��������� ���� HP dc7600", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "��������� ���� HP dc7600"
        findstr = "��������� ���� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "��������� ����"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="��������� ���� HP dc7700", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "��������� ���� HP dc7700"
        findstr = "��������� ���� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "��������� ����"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="��������� ���� HP dc7800", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "��������� ���� HP dc7800"
        findstr = "��������� ���� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "��������� ����"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="��������� ���� HP d530", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "��������� ���� HP d530"
        findstr = "��������� ���� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "��������� ����"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������� HP LJ 4350", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������� HP LJ 4350"
        findstr = "������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="��� Ricoh 3500", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "��� Ricoh 3500"
        findstr = "��� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "���"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������� HP 650", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������� HP 650"
        findstr = "������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������� HP 630", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������� HP 630"
        findstr = "������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������� HP 4340", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������� HP 4340"
        findstr = "������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������� HP 4520", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������� HP 4520"
        findstr = "������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������� HP3100", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������� HP3100"
        findstr = "������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������� HP dml3200", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������� HP dml3200"
        findstr = "������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������� HP 4330", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������� HP 4330"
        findstr = "������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="��� OfficeServ 7070", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "��� OfficeServ 7070"
        findstr = "��� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "���"
    End If

    '_________________________________________________________
    
    Set Result = Cells.Find(What:="��� Samsung SCX-4220", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "��� Samsung SCX-4220"
        findstr = "��� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "���"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="��� Xerox 4118", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "��� Xerox 4118"
        findstr = "��� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "���"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������� ATIV Smart PC Pro XE700T1C-K03RU", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������� ATIV Smart PC Pro XE700T1C-K03RU"
        findstr = "������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������ Lenovo tape � 330", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������ Lenovo tape � 330"
        findstr = "������ "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "������"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������ Acer Aspire one 725", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������ Acer Aspire one 725"
        findstr = "������ "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "������"
    End If

    '_________________________________________________________
    
    Set Result = Cells.Find(What:="������� HP Officejet CN 551A", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "������� HP Officejet CN 551A"
        findstr = "������� "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "�������"
    End If

Next i

End Sub
