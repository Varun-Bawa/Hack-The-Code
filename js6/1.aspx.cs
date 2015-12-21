using System;
using System.Collections.Generic;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.OleDb;

public partial class q1 : System.Web.UI.Page
{
        OleDbCommand cmd = null;
        OleDbConnection con = null;
        OleDbDataReader dr = null;
        string conStr, cmdStr;

        protected void Page_Load(object sender, EventArgs e)
    {
        TextBox2.Text = DateTime.Now.ToString("MM-dd-yyyy HH:mm:ss");
        try
        {
            string check = Convert.ToString(Session["lvl"]);
            if (check != "1" || check.Equals(null))
            {
                Response.Redirect("Default.aspx");
            }

        }
        catch (Exception ex)
        {
            Response.Redirect("Expired.aspx");
        }
       
    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        
        if (TextBox1.Text=="rahuldravid")
        {
            conStr = "Provider=Microsoft.ACE.OLEDB.12.0;Data Source='|DataDirectory|htc.accdb';Persist Security Info=True";
            con = new OleDbConnection(conStr);

            cmdStr = "UPDATE member SET [level]='2', [dt]='"+ TextBox2.Text  + "' where email='" + Session["email"] + "'";

            cmd = new OleDbCommand(cmdStr, con);
            con.Open();
            cmd.ExecuteNonQuery();
            Session["lvl"] = "2";
            //string myStringVariable = string.Empty;
            //myStringVariable = "level Updated...!!!";
            //ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('" + myStringVariable + "');", true);

            con.Close();
          Response.Redirect("2.aspx");
        }
        

    }
    protected void Button2_Click(object sender, EventArgs e)
    {
        Session["email"] = null;
        Session["lvl"] = "2";
        //Clear the Session cache
        Session.Clear();
        //Destroy the session
        Session.Abandon();
        Response.Cache.SetExpires(DateTime.UtcNow.AddMinutes(-1));
        Response.Cache.SetCacheability(HttpCacheability.NoCache);
        Response.Cache.SetNoStore();

        Response.Redirect("Default.aspx");
    }
    protected void LinkButton1_Click(object sender, EventArgs e)
    {
       // Response.Redirect("leaderboard.aspx");

    }
}