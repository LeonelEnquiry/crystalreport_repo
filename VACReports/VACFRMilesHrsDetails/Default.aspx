﻿<%@ page language="VB" autoeventwireup="false" %>
    <%@ Register TagPrefix="CR" Namespace="CrystalDecisions.Web"
        Assembly="CrystalDecisions.Web, Version=13.0.4000.0, Culture=neutral, PublicKeyToken=692fbea5521e1304" %>

        <html xmlns="http://www.w3.org/1999/xhtml">

        <head runat="server">
            <title>FR Miles & Hours</title>
        </head>

        <body>
            <form id="form1" runat="server">
                <div>
                    <CR:CrystalReportViewer ID="CrystalReportViewer1" Runat="server" AutoDataBind="True" Height="947px"
                        ReportSourceID="CrystalReportSource1" Width="845px" EnableDatabaseLogonPrompt="False"
                        ToolPanelView="ParameterPanel" />
                    <CR:CrystalReportSource ID="CrystalReportSource1" runat="server">
                        <Report FileName="CrystalReport1.rpt">
                        </Report>
                    </CR:CrystalReportSource>

                </div>
            </form>
        </body>

        </html>