<%@ Page Language="C#" AutoEventWireup="true" CodeFile="1.aspx.cs" Inherits="q1" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <style type="text/css">
        .style1
        {
            width: 100%;
            height: 131px;
        }
        .style4
        {
            height: 32px;
        }
        .style5
        {
            width: 100%;
        }
        .style7
        {
            height: 24px;
        }
        .style8
        {
            height: 23px;
        }
        .style9
        {
            height: 42px;
        }
    </style>
</head>
<body background="Images/bgnoise_lg.png">
    <form id="form1" runat="server">
    <table class="style1" bgcolor="Black">
        <tr>
            <td align="center" bgcolor="Black" class="style4" colspan="3">
                <asp:Image ID="Image3" runat="server" Height="90px" ImageAlign="Left" 
                    ImageUrl="/htc/images/upes.jpg" Width="92px" />
                    </td>
                    <td align="center">
                <marquee behavior="alternate" scrollamount="9" onmouseover="this.stop();" onmouseout="this.start();">
                    <asp:Label ID="Label2" runat="server" Font-Bold="True" Font-Size="X-Large" 
                    ForeColor="White" Text="HACK THE CODE"></asp:Label></marquee> 

            </td>
                    <td>
                <asp:Image ID="Image4" runat="server" Height="89px" ImageAlign="Right" 
                    ImageUrl="/htc/images/csi logo.jpg" Width="93px" />
                        <br />
                    </td>
                    
        </tr>
        
    </table>
    <table class="style5">
        <tr>
            <td align="center" class="style9">
                <br />
                <asp:Label ID="Label1" runat="server" Font-Bold="True" Font-Size="X-Large" 
                    Text="Level 1" style="color: #00FF00"></asp:Label>
                <br />
            </td>
        </tr>
        <tr>
            <td align="center">
                <asp:Image ID="Image5" runat="server" ImageUrl="/htc/images/HTC/q1.jpg" 
                    BorderColor="Black" BorderStyle="Solid" BorderWidth="8px" Height="290px" 
                    Width="418px" />
            </td>
        </tr>
        <tr>
            <td align="center" class="style7">
                </td>
        </tr>
        <tr>
            <td align="center">
                    <asp:TextBox ID="TextBox1" runat="server" BorderColor="Black" 
                    BorderStyle="Solid" BorderWidth="2px"></asp:TextBox>
                  <asp:Button ID="Button1" runat="server" Text="Submit" BorderColor="Black" 
                    BorderStyle="Solid" BorderWidth="2px" onclick="Button1_Click" 
                    style="height: 26px; color: #000000;" />
            </td>
        </tr>
        <tr>
            <td align="center">
                &nbsp;</td>
        </tr>
        <tr>
            <td align="center">
                <asp:LinkButton ID="LinkButton1" runat="server" BorderColor="Black" OnClientClick="javascript:window.open('leaderboard.aspx?','');return false;"
                    BorderStyle="Solid" BorderWidth="2px" onclick="LinkButton1_Click" 
                    style="font-weight: 700; color: #00FF00">Leader Board</asp:LinkButton>
            </td>
        </tr>
        <tr>
            <td align="center">
                &nbsp;</td>
        </tr>
        <tr>
            <td align="center">
                &nbsp;&nbsp;
                <asp:Button ID="Button2" runat="server" BorderColor="Black" BorderStyle="Solid" 
                    BorderWidth="2px" onclick="Button2_Click" Text="Logout" />
&nbsp;
                
            </td>
        </tr>
        <tr>
            <td align="center" class="style8">
                <asp:TextBox ID="TextBox2" runat="server" Visible="False"></asp:TextBox>
                </td>
        </tr>
    </table>
    </form>
</body>
</html>
