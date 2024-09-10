using Microsoft.AspNetCore.Http.Features;
using SoftexDotNetCoreUI;
using SoftexDotNetCoreUI.Models.Inputs;
using System.Text.Json;

public class SecurityChecks
{
	//Check if user session is accepted
	public static bool CheckIfSubmitIsNotAllowed(string Action, int TimeToWait, HttpContext httpContext)
	{
		//Choose the action folder
		string localPath = "SecurityLogs/SubmitActions/" + Action;
		string contentRootPath = Path.Combine(Directory.GetCurrentDirectory() + "/wwwroot/", localPath);
		string DateData = DateTime.Now.ToString("yyyy-MM-dd");
		string DateTimeData = DateTime.Now.ToString("yyyy-MM-dd HH:mm:ss");
		if (!File.Exists(contentRootPath))
		{
			System.IO.Directory.CreateDirectory(contentRootPath);
		}
		//Get Old Logs
		DirectoryInfo DirectoryData = new DirectoryInfo(contentRootPath); //Assuming Test is your Folder

		FileInfo[] Files = DirectoryData.GetFiles("*.json"); //Getting Text files

		//Delete logs more than 7 days
		foreach (FileInfo file in Files)
		{
			if (DateTime.Now.Subtract(DateTime.Parse(file.Name.Replace(".json", ""))).Days > 7)
			{
				file.Delete();
			}
		}

		bool NotAccepted = false;

		//Check if last session time not less than 30 minutes
		if (httpContext.Session.Get(Action) != null && DateTime.Now.Subtract(DateTime.Parse(httpContext.Session.GetString(Action))).TotalMinutes < TimeToWait)
		{
			NotAccepted = true;
		}

		httpContext.Session.SetString(Action, DateTimeData);

		//Check if last cookies time not less than 30 minutes

		if (httpContext.Request.Cookies[Action] != null && DateTime.Now.Subtract(DateTime.Parse(httpContext.Request.Cookies[Action])).TotalMinutes < TimeToWait)
		{
			NotAccepted = true;
		}

		CookieOptions options = new CookieOptions();
		options.Expires = DateTime.Now.AddMinutes(30);
		httpContext.Response.Cookies.Append(Action, DateTimeData, options);


		return SoftexSecurity.CheckIfIpIsNotAllowed(Action, TimeToWait, httpContext, NotAccepted);

	}
}