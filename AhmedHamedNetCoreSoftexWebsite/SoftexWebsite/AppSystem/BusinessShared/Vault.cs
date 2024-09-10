namespace SoftexWebsite.AppSystem.BusinessShared

{
	public class Vault
	{


		public static int ResultCountPerPage = 8;

		public static string GetSecurityDetails(HttpContext context)
		{
			string userAgent = context.Request.Headers?.FirstOrDefault(s => s.Key.ToLower() == "user-agent").Value;
			return userAgent;
		}


	}



}