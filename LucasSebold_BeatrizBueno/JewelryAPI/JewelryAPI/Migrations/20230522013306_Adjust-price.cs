using Microsoft.EntityFrameworkCore.Migrations;

#nullable disable

namespace JewelryAPI.Migrations
{
    public partial class Adjustprice : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.RenameColumn(
                name: "JewelryPrince",
                table: "jewelries",
                newName: "JewelryPrice");
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.RenameColumn(
                name: "JewelryPrice",
                table: "jewelries",
                newName: "JewelryPrince");
        }
    }
}
