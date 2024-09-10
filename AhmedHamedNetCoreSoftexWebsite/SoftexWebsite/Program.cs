using AspNetCore.ReCaptcha;
using BaseControllers.Localization;
using BaseControllers.Models.Input;
using BaseControllersOnlineStore;
using ExappsCaller;
using Microsoft.AspNetCore.Localization;
using Microsoft.AspNetCore.Mvc.Razor;
using Microsoft.AspNetCore.ResponseCompression;
using Microsoft.Extensions.Localization;
using System.Globalization;
using System.IO.Compression;

var builder = WebApplication.CreateBuilder(args);

ConfigurationBuilder ConfigurationBuilder = new ConfigurationBuilder();
var config = new ConfigurationBuilder()
                .SetBasePath(Directory.GetCurrentDirectory())
                .AddJsonFile("appsettings.json").Build();

System_Vault.ApiKey = config["ApiKey"];
System_Vault.Database = config["Database"];
System_Vault.Server = config["Server"];
System_Vault.EXAppID = config["EXAppID"];
ApplicationSettings.MobileWidth = int.Parse(config["MobileWidth"]);
ApplicationSettings.TabletWidth = int.Parse(config["TabletWidth"]);
ApplicationSettings.FirstLanguage = config["FirstLanguage"];
ApplicationSettings.SecondLanguage = config["SecondLanguage"];
ApplicationSettings.FirstLanguageInt = int.Parse(config["FirstLanguageInt"]);
ApplicationSettings.SecondLanguageInt = int.Parse(config["SecondLanguageInt"]);
//ApplicationSettings.DesintationCommRoutesID = int.Parse(config["DesintationCommRoutesID"]);
//ApplicationSettings.DesintationSecCommRoutesID = int.Parse(config["DesintationSecCommRoutesID"]);


builder.Services.AddLocalization(options => options.ResourcesPath = "Resources");
builder.Services.AddSingleton<IStringLocalizerFactory, JsonStringLocalizerFactory>();
builder.Services.AddMvc()
    .AddViewLocalization(LanguageViewLocationExpanderFormat.Suffix)
    .AddDataAnnotationsLocalization(Options =>
    {
        Options.DataAnnotationLocalizerProvider = (type, factory) =>
        factory.Create(typeof(JsonStringLocalizerFactory));
    });
builder.Services.Configure<RequestLocalizationOptions>(options =>
{
    var supportedCultures = new[]
    {   new CultureInfo("en-US"),
        new CultureInfo("ar-EG")

    };
    options.DefaultRequestCulture = new RequestCulture(culture: supportedCultures[0], uiCulture: supportedCultures[0]);
    options.SupportedCultures = supportedCultures;
    options.SupportedUICultures = supportedCultures;

});

int SessionTimeOut = Int32.Parse(config["SessionTimeOut"]);
builder.Services.AddSession(options =>
{
    options.IdleTimeout = TimeSpan.FromHours(SessionTimeOut);
    options.Cookie.HttpOnly = true;
    options.Cookie.IsEssential = true;
});

builder.Services.AddSingleton<LocalizationMiddleware>();

builder.Services.AddHttpContextAccessor();
builder.Services.AddSingleton<IHttpContextAccessor, HttpContextAccessor>();


builder.Services.AddResponseCompression(options =>
{
    options.EnableForHttps = true;
    options.Providers.Add<BrotliCompressionProvider>();
    options.Providers.Add<GzipCompressionProvider>();
});




builder.Services.Configure<BrotliCompressionProviderOptions>(options =>
{
    options.Level = CompressionLevel.Fastest;
});

builder.Services.Configure<GzipCompressionProviderOptions>(options =>
{
    options.Level = CompressionLevel.SmallestSize;
});

// Add services to the container.
builder.Services.AddControllersWithViews();


builder.Services.AddReCaptcha(builder.Configuration.GetSection("ReCaptcha"));


builder.Services.AddResponseCaching();

var app = builder.Build();

app.UseResponseCompression();


// Configure the HTTP request pipeline.
if (!app.Environment.IsDevelopment())
{
    app.UseExceptionHandler("/Home/Error");
    // The default HSTS value is 30 days. You may want to change this for production scenarios, see https://aka.ms/aspnetcore-hsts.
    app.UseHsts();
}
app.UseSession();
app.UseHttpsRedirection();
app.UseStaticFiles();
//app.UseStaticFiles(new StaticFileOptions
//{
//    OnPrepareResponse = ctx =>
//    {
//        // Cache static files for 30 days
//        ctx.Context.Response.Headers.Append("Cache-Control", "public,max-age=2592000");
//        ctx.Context.Response.Headers.Append("Expires", DateTime.UtcNow.AddMinutes(5).ToString("R", CultureInfo.InvariantCulture));
//    }
//});

app.UseRouting();
var supportedCultures = new[] { "en-US", "ar-EG" };
var locaizationOptions = new RequestLocalizationOptions()
    .SetDefaultCulture(supportedCultures[0])
    .AddSupportedCultures(supportedCultures)
    .AddSupportedUICultures(supportedCultures);

app.UseRequestLocalization(locaizationOptions);
app.UseMiddleware<LocalizationMiddleware>();
app.UseAuthorization();
app.MapControllerRoute(
    name: "default",
    pattern: "{controller=Home}/{action=Index}/{id?}");

app.Run();