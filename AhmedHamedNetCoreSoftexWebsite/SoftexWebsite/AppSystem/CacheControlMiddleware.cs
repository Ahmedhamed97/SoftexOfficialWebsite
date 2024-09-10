public class CacheControlMiddleware
{
	private readonly RequestDelegate _next;

	public CacheControlMiddleware(RequestDelegate next)
	{
		_next = next;
	}

	public async Task InvokeAsync(HttpContext context)
	{
		await _next(context);

		if (context.Response.StatusCode == 200)
		{
			var path = context.Request.Path.Value;
			if (path.EndsWith(".html") || path.EndsWith(".htm"))
			{
				context.Response.Headers["Cache-Control"] = "public, max-age=3600"; // 1 hour
			}
			else if (path.EndsWith(".jpg") || path.EndsWith(".jpeg") || path.EndsWith(".png") ||
					 path.EndsWith(".gif") || path.EndsWith(".css") || path.EndsWith(".js"))
			{
				context.Response.Headers["Cache-Control"] = "public, max-age=2592000"; // 30 days
			}
		}
	}
}