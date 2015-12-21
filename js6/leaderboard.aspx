<%@ Page Language="C#" AutoEventWireup="true" CodeFile="leaderboard.aspx.cs" Inherits="leaderboard" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title>Leaderboard</title>
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
            color: #00FF00;
        }
    </style>
</head>
<body background="Images/bgnoise_lg.png">
    <form id="form1" runat="server">
    <table class="style1" bgcolor="Black">
        <tr>
            <td align="center" bgcolor="Black" class="style4" colspan="3">
                <asp:Image ID="Image3" runat="server" Height="90px" ImageAlign="Left" 
                    ImageUrl="/htc/Images/upes.jpg" Width="92px" />
                    </td>
                    <td align="center">
                <marquee behavior="alternate" scrollamount="9" onmouseover="this.stop();" onmouseout="this.start();">
                    <asp:Label ID="Label2" runat="server" Font-Bold="True" Font-Size="X-Large" 
                    ForeColor="White" Text="HACK THE CODE"></asp:Label></marquee> 

            </td>
                    <td>
                <asp:Image ID="Image4" runat="server" Height="89px" ImageAlign="Right" 
                    ImageUrl="/htc/Images/csi logo.jpg" Width="93px" />
                        <br />
                    </td>
                    
        </tr>
        
    </table>
    <table class="style5">
        <tr>
            <td align="center">
                &nbsp;</td>
        </tr>
        <tr>
            <td align="center">
                
                 <asp:Label ID="Label1" runat="server" Text="Leader Board" Font-Bold="True" 
                     Font-Size="XX-Large" style="color: #00FF00"></asp:Label>
            </td>
        </tr>
        <tr>
            <td align="center" class="style7">
<strong><span class="style8">For hints, Please visit our Discussion Forum from </span> </strong> <a href="https://www.facebook.com/upescsi/app_202980683107053"> <strong> 
                <span class="style8">HERE.</span></strong></a>
                </td>
        </tr>
        <tr>
            <td align="center">
                &nbsp;</td>
        </tr>
        <tr>
            <td align="center">
                <asp:GridView ID="GridView1" runat="server" 
                    AutoGenerateColumns="False" BackColor="White" BorderColor="#999999" 
                    BorderStyle="Solid" BorderWidth="1px" CellPadding="3" 
                    DataSourceID="AccessDataSource1" EnableModelValidation="True" ForeColor="Black" 
                    GridLines="Vertical" Width="679px">
                    <AlternatingRowStyle BackColor="#CCCCCC"/>
                    <RowStyle HorizontalAlign="Center" />
                    <Columns>
                     <asp:TemplateField HeaderText="Rank">
                        <ItemTemplate>
                            <%# Container.DataItemIndex + 1 %>
                        </ItemTemplate>                         
                    </asp:TemplateField>

                        <asp:BoundField DataField="fname" HeaderText="Name" SortExpression="fname" />
                        <asp:BoundField DataField="college" HeaderText="College" 
                            SortExpression="college" />
                        <asp:BoundField DataField="level" HeaderText="Level" SortExpression="level" />
                        <asp:BoundField DataField="dt" HeaderText="Date & Time (IST)" SortExpression="dt" />
                    </Columns>
                    <FooterStyle BackColor="#CCCCCC" />
                    <HeaderStyle BackColor="Black" Font-Bold="True" ForeColor="White" />
                    <PagerStyle BackColor="#999999" ForeColor="Black" HorizontalAlign="Center" />
                    <SelectedRowStyle BackColor="#000099" Font-Bold="True" ForeColor="White" />
                </asp:GridView>
                 <asp:AccessDataSource ID="AccessDataSource1" runat="server" DataFile="/App_Data/htc.accdb" SelectCommand="SELECT [fname], [college], [level] FROM [member] ORDER BY [level] DESC, [dt]">
                </asp:AccessDataSource>
            </td> 
			<h2>The event has not been started yet!</h2>
        </tr>
        <tr>
            <td align="center">
                <asp:Label ID="Label12" runat="server" 
                    
                    
                    Text="Click &lt;a href=&quot;Default.aspx&quot;&gt;HERE&lt;/a&gt; to go to Login Page" 
                    CssClass="style8"></asp:Label>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>
