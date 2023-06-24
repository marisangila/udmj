using Microsoft.EntityFrameworkCore.Migrations;

#nullable disable

namespace JewelryAPI.Migrations
{
    public partial class Remoçãodoscampos : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropColumn(
                name: "gender",
                table: "jewelries");

            migrationBuilder.DropColumn(
                name: "material",
                table: "jewelries");
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.AddColumn<string>(
                name: "gender",
                table: "jewelries",
                type: "nvarchar(max)",
                nullable: false,
                defaultValue: "");

            migrationBuilder.AddColumn<string>(
                name: "material",
                table: "jewelries",
                type: "nvarchar(max)",
                nullable: false,
                defaultValue: "");
        }
    }
}
