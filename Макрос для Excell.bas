Attribute VB_Name = "Module11"
Sub Mak_1()

For i = 1 To 300
    Set Result = Cells.Find(What:="МФУ Samsung SCX 4623", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "МФУ Samsung SCX 4623"
        findstr = "МФУ "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "МФУ"
    End If

    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Ноутбук HP 630", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Ноутбук HP 630"
        findstr = "Ноутбук "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Ноутбук"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Межсетевой экран cisco ASA 5505", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Межсетевой экран cisco ASA 5505"
        findstr = "Межсетевой экран "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Межсетевой экран"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Системный блок HP 4000", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Системный блок HP 4000"
        findstr = "Системный блок "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Системный блок"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="3G роутер Билайн", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "3G роутер Билайн"
        findstr = "3G роутер "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "3G роутер"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="3G роутер Мегафон", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "3G роутер Мегафон"
        findstr = "3G роутер "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "3G роутер"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Маршрутизатор cisco 2800", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Маршрутизатор cisco 2800"
        findstr = "Маршрутизатор "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Маршрутизатор"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Маршрутизатор cisco 2801", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Маршрутизатор cisco 2801"
        findstr = "Маршрутизатор "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Маршрутизатор"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Маршрутизатор cisco 2901", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Маршрутизатор cisco 2901"
        findstr = "Маршрутизатор "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Маршрутизатор"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Коммутатор Cisco 2960", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Коммутатор Cisco 2960"
        findstr = "Коммутатор "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Коммутатор"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Коммутатор Cisco 2960", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Коммутатор Cisco 2960"
        findstr = "Коммутатор "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Коммутатор"
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
        ActiveCell.FormulaR1C1 = "Маршрутизатор"
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
        ActiveCell.FormulaR1C1 = "ИБП"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="ИБП SUA1500", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "ИБП SUA1500"
        findstr = "ИБП "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "ИБП"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="МФУ Ricoh MP201", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "МФУ Ricoh MP201"
        findstr = "МФУ "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "МФУ"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="МФУ Xerox M20i", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "МФУ Xerox M20i"
        findstr = "МФУ "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "МФУ"
    End If

    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Монитор HP LE1711", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Монитор HP LE1711"
        findstr = "Монитор "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Монитор"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Монитор Samsung E 1720", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Монитор Samsung E 1720"
        findstr = "Монитор "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Монитор"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Системный блок HP 6200", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Системный блок HP 6200"
        findstr = "Системный блок "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Системный блок"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Системный блок HP 6300", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Системный блок HP 6300"
        findstr = "Системный блок "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Системный блок"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Web камера Logitech", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Web камера Logitech"
        findstr = "Web камера "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Web камера"
    End If

    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Монитор HP L1706", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Монитор HP L1706"
        findstr = "Монитор "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Монитор"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Монитор HP L1710", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Монитор HP L1710"
        findstr = "Монитор "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Монитор"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Монитор HP L1702", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Монитор HP L1702"
        findstr = "Монитор "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Монитор"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Системный блок HP dc7600", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Системный блок HP dc7600"
        findstr = "Системный блок "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Системный блок"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Системный блок HP dc7700", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Системный блок HP dc7700"
        findstr = "Системный блок "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Системный блок"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Системный блок HP dc7800", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Системный блок HP dc7800"
        findstr = "Системный блок "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Системный блок"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Системный блок HP d530", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Системный блок HP d530"
        findstr = "Системный блок "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Системный блок"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Принтер HP LJ 4350", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Принтер HP LJ 4350"
        findstr = "Принтер "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Принтер"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="МФУ Ricoh 3500", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "МФУ Ricoh 3500"
        findstr = "МФУ "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "МФУ"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Ноутбук HP 650", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Ноутбук HP 650"
        findstr = "Ноутбук "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Ноутбук"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Ноутбук HP 630", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Ноутбук HP 630"
        findstr = "Ноутбук "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Ноутбук"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Ноутбук HP 4340", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Ноутбук HP 4340"
        findstr = "Ноутбук "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Ноутбук"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Ноутбук HP 4520", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Ноутбук HP 4520"
        findstr = "Ноутбук "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Ноутбук"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Ноутбук HP3100", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Ноутбук HP3100"
        findstr = "Ноутбук "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Ноутбук"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Ноутбук HP dml3200", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Ноутбук HP dml3200"
        findstr = "Ноутбук "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Ноутбук"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Ноутбук HP 4330", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Ноутбук HP 4330"
        findstr = "Ноутбук "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Ноутбук"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="АТС OfficeServ 7070", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "АТС OfficeServ 7070"
        findstr = "АТС "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "АТС"
    End If

    '_________________________________________________________
    
    Set Result = Cells.Find(What:="МФУ Samsung SCX-4220", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "МФУ Samsung SCX-4220"
        findstr = "МФУ "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "МФУ"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="МФУ Xerox 4118", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "МФУ Xerox 4118"
        findstr = "МФУ "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "МФУ"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Планшет ATIV Smart PC Pro XE700T1C-K03RU", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Планшет ATIV Smart PC Pro XE700T1C-K03RU"
        findstr = "Планшет "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Планшет"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Нетбук Lenovo tape Е 330", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Нетбук Lenovo tape Е 330"
        findstr = "Нетбук "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Нетбук"
    End If
    
    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Нетбук Acer Aspire one 725", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Нетбук Acer Aspire one 725"
        findstr = "Нетбук "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Нетбук"
    End If

    '_________________________________________________________
    
    Set Result = Cells.Find(What:="Принтер HP Officejet CN 551A", After:=ActiveCell, _
    LookIn:=xlFormulas, LookAt:=xlPart, SearchOrder:=xlByRows, _
    SearchDirection:=xlNext, MatchCase:=False)
    If Result Is Nothing Then
        
    Else
        Result.Activate
        sample = "Принтер HP Officejet CN 551A"
        findstr = "Принтер "
        newstr = ""
        retval = Replace(sample, findstr, newstr, 1)
        ActiveCell.FormulaR1C1 = retval
        ActiveCell.Offset(0, -1).Select
        ActiveCell.FormulaR1C1 = "Принтер"
    End If

Next i

End Sub
