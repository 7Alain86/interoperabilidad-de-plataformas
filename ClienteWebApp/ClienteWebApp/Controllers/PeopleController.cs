using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using ClienteWebApp.Models;
using System.Threading.Tasks;
using Newtonsoft.Json;
using System.Net.Http;
using System.Net.Http.Headers;
using ClienteWebApp.Models;

namespace ClienteWebApp.Controllers
{
    String Baseurl = "http://localhost:1696/";
    public async Task<ActionResult> Index()
    {
        List<People> PeopleInfo = new List<People>();
        using (var client = new HttpClient())
        {
            client.BaseAddress = new Uri(Baseurl);
            client.DefaultRequestHeaders.Clear();
            client.DefaultRequestHeaders.Accept.Add(new
           MediaTypeWithQualityHeaderValue("application/json"));
            HttpResponseMessage Res = await client.GetAsync("api/people/");
            if (Res.IsSuccessStatusCode)
            {
                var PeopleResponse = Res.Content.ReadAsStringAsync().Result;
                PeopleInfo =
                JsonConvert.DeserializeObject<List<People>>(PeopleResponse);
            }
        }
        return View(PeopleInfo);
    }
}